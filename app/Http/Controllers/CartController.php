<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EmptyCartRequest;
use App\Http\Requests\DeleteACartProductRequest;
use App\Http\Requests\EvaluateCartRequest;
use LaravelDaily\Invoices\Invoice;
// use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

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
        $customer = new Buyer([
            'name'          => 'Sample Buyer Name',
            'custom_fields' => [
                'phone' => '+91 3131251100',
            ],
        ]);

        $notes = [
            'We really appreciate your business and if there is anything else we can do, please let us know!',
        ];
        $notes = implode("<br>", $notes);

        foreach($validated['product_id'] as $key => $value)
        {
            $items[] = (new InvoiceItem())
                        ->title($validated['product_name'][$key])
                        ->description($validated['description'][$key] ? $validated['description'][$key] : ' ')
                        ->pricePerUnit($validated['price'][$key])
                        ->quantity($validated['quantity'][$key])
                        ->discount($validated['discount'][$key]);
        }

        $invoice = Invoice::make()
            ->buyer($customer)
            //->discountByPercent(10)
            ->taxRate(12)
            ->shipping(200)
            ->addItems($items)
            ->notes($notes)
            ->logo(public_path('assets/images/solarvilla/logo/solarvilla-logo-light.webp'))
            ->save();

        return $invoice->stream();

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
