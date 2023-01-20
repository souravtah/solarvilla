<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Quotation;
use App\Models\ProductCategory;
use LaravelDaily\Invoices\Invoice;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use App\Http\Requests\EvaluateQuotationCartRequest;

class QuotationController
{
    public function index()
    {
        $category_id        = 0;
        $products           = Product::all();
        $product_categories = ProductCategory::all();
        $user = Auth::user(); $current_selected_products = [];
        foreach($user->products as $product) {$current_selected_products[] = $product->id;}
        $cart_count         = count($current_selected_products);

        return view('quotations.index', compact('category_id', 'product_categories', 'products', 'cart_count', 'current_selected_products'));
    }

    public function cart()
    {
        $user               = Auth::user();
        $products           = $user->products;
        $product_ids        = $products->pluck('id')->toArray();
        $cart_count         = $products->count();

        return view('quotations.cart.index', compact('cart_count', 'products', 'product_ids'));
    }


    public function listing()
    {
        $quotations         = Quotation::with('buyer')
                                    ->where('user_id', auth()->id())
                                    ->orderByDesc('updated_at')
                                    ->paginate();

        return view('quotations.listing', compact('quotations'));
    }

    public function listing_all()
    {
        $quotations         = Quotation::with('buyer')
                                    ->orderByDesc('updated_at')
                                    ->paginate();

        return view('quotations.listing', compact('quotations'));
    }


    public function store(EvaluateQuotationCartRequest $request)
    {
        $validated                  = $request->safe()->all();
        $quotation_number           = strtoupper(uniqid());
        $auth_user_id               = Auth::id();

        foreach($validated['product_id'] as $key => $value)
        {
            $quotation = new Quotation;
            $quotation->user_id               = $auth_user_id;
            $quotation->quotation_number      = $quotation_number;
            $quotation->product_id            = $validated['product_id'][$key];
            $quotation->product_name          = $validated['product_name'][$key];
            $quotation->price                 = $validated['price'][$key];
            $quotation->quantity              = $validated['quantity'][$key];
            $quotation->description           = $validated['description'][$key];
            $quotation->created_at            = \Carbon\Carbon::parse($validated['invoice_date'])->format('Y-m-d H:i');
            $quotation->updated_at            = \Carbon\Carbon::parse($validated['invoice_date'])->format('Y-m-d H:i');
            $quotation->save();
        }

        \App\Models\Buyer::create([
            'invoice_number'            => $quotation_number,
            'name'                      => $validated['name'],
            'phone'                     => $validated['phone'],
            'email'                     => $validated['email'],
            'address'                   => $validated['address'],
        ]);

        Auth::user()->products()->detach($validated['product_id']);

        return redirect()->route('quotations.listing-all');
                    //->with('status', 'Invoice generated.');
    }

    public function show(String $quotation_number)
    {
        $quotation = Quotation::with('buyer')
                                ->where('quotation_number', '=', $quotation_number)
                                //->where('user_id', auth()->id())
                                ->get();

        if($quotation->count())
        {
            foreach($quotation as $quotation_details)
            {
                $items[] = (new InvoiceItem())
                            ->title((string)$quotation_details->product_name)
                            ->description((string)$quotation_details->description ? $quotation_details->description : ' ')
                            ->pricePerUnit((float)$quotation_details->price)
                            ->quantity((int)$quotation_details->quantity);
                            //->discount((int)$quotation_details->discount);
            }

            $customer = new Party([
                'name'          => $quotation->pluck('buyer')[0]->name,
                'phone'         => $quotation->pluck('buyer')[0]->phone,
                'address'       => $quotation->pluck('buyer')[0]->address,
                'custom_fields' => [
                    'email'         => $quotation->pluck('buyer')[0]->email,
                ],
            ]);

            $notes = [
                'Terms & conditions:',
                '1. Work will resumed after advance payment.',
                '2. Taxes & Transportation charges extra.',
                '',
                '',
                'This is a system generated document. No signature is required.'
            ];
            $notes = implode("<br>", $notes);

            $file_name = ' Quotation';

            $quotation = Invoice::make('Quotation')
                ->template('quotation')
                ->payUntilDays(45)
                ->series($quotation_number)
                ->buyer($customer)
                //->taxRate(18)
                ->date($quotation->pluck('updated_at')[0])
                //->shipping($quotation->pluck('shipping')[0])
                ->addItems($items)
                ->notes($notes)
                ->filename($quotation->pluck('buyer')[0]->name . $file_name)
                ->logo(public_path('assets/images/solarvilla/logo/solarvilla-logo-small.jpeg'))
                ->save('public');
            return $quotation->stream();



            //$link = $invoice->url();
            // Then send email to party with link

            // And return invoice itself to browser or have a different view
            //return $invoice->stream();


            //return view('invoices.show', compact('invoice'));


        }
        else{
            abort(403);
        }
    }
}
