<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EmptyCartRequest;
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

    public function store(Request $request)
    {
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
        $validated                  = $request->safe()->only(['productIds']);
        Auth::user()->products()->detach($validated['productIds']);

        return back();
    }
}
