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
use App\Models\Quotation;

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

    // public function create()
    // {
    // }

    public function store(EvaluateCartRequest $request)
    {
        $validated                  = $request->safe()->all();
        $invoice_number             = strtoupper(uniqid());
        $auth_user_id               = Auth::id();

        foreach($validated['product_id'] as $key => $value)
        {
            $invoice = new Invoice;
            $invoice->user_id               = $auth_user_id;
            $invoice->invoice_number        = $invoice_number;
            $invoice->product_id            = $validated['product_id'][$key];
            $invoice->product_name          = $validated['product_name'][$key];
            $invoice->price                 = $validated['price'][$key];
            $invoice->quantity              = $validated['quantity'][$key];
            $invoice->description           = $validated['description'][$key];
            $invoice->discount              = $validated['discount'][$key];
            $invoice->shipping              = $validated['shipping'];
            $invoice->created_at            = \Carbon\Carbon::parse($validated['invoice_date'])->format('Y-m-d H:i');
            $invoice->updated_at            = \Carbon\Carbon::parse($validated['invoice_date'])->format('Y-m-d H:i');
            $invoice->save();
        }

        \App\Models\Buyer::create([
            'invoice_number'            => $invoice_number,
            'name'                      => $validated['name'],
            'phone'                     => $validated['phone'],
            'email'                     => $validated['email'],
            'address'                   => $validated['address'],
        ]);

        Auth::user()->products()->detach($validated['product_id']);

        return redirect()->route('invoices.index');
                    //->with('status', 'Invoice generated.');

    }

    public function store_quotation(EvaluateCartRequest $request)
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
            $quotation->discount              = $validated['discount'][$key];
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

        return redirect()->route('invoices.index');
                    //->with('status', 'Invoice generated.');

    }

    // public function show(int $id)
    // {
    // }

    // public function edit(int $id)
    // {
    // }

    // public function update(Request $request, int $id)
    // {
    // }

    // public function destroy(int $id)
    // {
    // }

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
