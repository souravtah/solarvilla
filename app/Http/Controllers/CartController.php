<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EmptyCartRequest;
use LaravelDaily\Invoices\Classes\Buyer;
// use LaravelDaily\Invoices\Invoice;
// use LaravelDaily\Invoices\Classes\Party;
use App\Http\Requests\EvaluateCartRequest;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use App\Http\Requests\DeleteACartProductRequest;

class CartController
{
    public function index()
    {
        $user               = Auth::user();
        $products           = $user->products;
        $product_ids        = $products->pluck('id')->toArray();
        $cart_count         = $products->count();

        return view('cart.index', compact('cart_count', 'products', 'product_ids'));
    }

    public function create()
    {
    }

    public function store(EvaluateCartRequest $request)
    {
        $validated                  = $request->safe()->all();
        $invoice_number             = strtoupper(uniqid());
        $auth_user_id               = Auth::id();

        foreach($validated['product_id'] as $key => $value)
        {
            Invoice::create([
                'user_id'               => $auth_user_id,
                'invoice_number'        => $invoice_number,
                'product_id'            => $validated['product_id'][$key],
                'product_name'          => $validated['product_name'][$key],
                'price'                 => $validated['price'][$key],
                'quantity'              => $validated['quantity'][$key],
                'description'           => $validated['description'][$key],
                'discount'              => $validated['discount'][$key],
            ]);
        }

        \App\Models\Buyer::create([
            'invoice_number'            => $invoice_number,
            'name'                      => $validated['name'],
            'phone'                     => $validated['phone'],
            'email'                     => $validated['email'],
            'address'                   => $validated['address'],
        ]);

        // return redirect()->route('invoices.index')
        //             ->with('status', 'Invoice generated.');

        return redirect()->route('invoices.show', ['invoice' => $invoice_number])
                    ->with('status', 'Invoice generated.');

        // $customer = new Buyer([
        //     'name'          => 'Sample Buyer Name',
        //     'custom_fields' => [
        //         'phone' => '+91 3131251100',
        //     ],
        // ]);

        // $notes = [
        //     'We really appreciate your business and if there is anything else we can do, please let us know!',
        // ];
        // $notes = implode("<br>", $notes);

        // foreach($validated['product_id'] as $key => $value)
        // {
        //     $items[] = (new InvoiceItem())
        //                 ->title($validated['product_name'][$key])
        //                 ->description($validated['description'][$key] ? $validated['description'][$key] : ' ')
        //                 ->pricePerUnit($validated['price'][$key])
        //                 ->quantity($validated['quantity'][$key])
        //                 ->discount($validated['discount'][$key]);
        // }

        // $invoice = Invoice::make()
        //     ->buyer($customer)
        //     //->discountByPercent(10)
        //     ->taxRate(12)
        //     ->date(now()->addWeeks(3))
        //     ->shipping(200)
        //     ->addItems($items)
        //     ->notes($notes)
        //     ->logo(public_path('assets/images/solarvilla/logo/solarvilla-logo-light.webp'))
        //     ->save();

        // return $invoice->stream();

    }

    public function show(int $id)
    {
    }

    public function edit(int $id)
    {
    }

    public function update(Request $request, int $id)
    {
    }

    public function destroy(int $id)
    {
    }

    public function delete_a_cart_item(DeleteACartProductRequest $request)
    {
        $validated                  = $request->safe()->only(['productId']);
        Auth::user()->products()->detach($validated['productId']);

        return back();
    }

    public function empty_cart(EmptyCartRequest $request)
    {
        $validated                  = $request->safe()->only(['product_id']);
        Auth::user()->products()->detach($validated['product_id']);

        return back();
    }
}
