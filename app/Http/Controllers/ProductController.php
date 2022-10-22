<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController
{
    public function index()
    {
        $products           = Product::all();
        $product_categories = ProductCategory::all();
        $user = Auth::user(); $current_selected_products = [];
        foreach($user->products as $product) {$current_selected_products[] = $product->id;}
        $cart_count         = count($current_selected_products);

        return view('products.index', compact('product_categories', 'products', 'cart_count', 'current_selected_products'));
    }

    public function add_to_cart(AddProductRequest $request)
    {
        $user = Auth::user(); $current_selected_products = [];
        $validated                  = $request->safe()->only(['productId']);
        foreach($user->products as $product) {$current_selected_products[] = $product->id;}
        $user->products()->sync($validated + $current_selected_products);

        return back()->with('success', true);
    }

    public function create()
    {
    }

    public function store(StoreProductRequest $request)
    {
    }

    public function show(Product $product)
    {
    }

    public function edit(Product $product)
    {
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
