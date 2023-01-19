<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\StoreProductRequest;

class ProductController
{
    public function index()
    {
        $category_id        = 0;
        $products           = Product::all();
        $product_categories = ProductCategory::all();
        $user = Auth::user(); $current_selected_products = [];
        foreach($user->products as $product) {$current_selected_products[] = $product->id;}
        $cart_count         = count($current_selected_products);

        return view('products.index', compact('category_id', 'product_categories', 'products', 'cart_count', 'current_selected_products'));
    }

    public function product_listing()
    {
        $product_categories = ProductCategory::all();
        $products           = Product::withTrashed()->with('product_category')->orderByDesc('updated_at')->paginate(5);
        $total_products     = Product::withTrashed()->count();
        return view('products.listing', compact('products', 'total_products', 'product_categories'));
    }

    public function add_to_cart(AddProductRequest $request)
    {
        $user = Auth::user(); $current_selected_products = [];
        $validated                  = $request->safe()->only(['productId']);
        foreach($user->products as $product) {$current_selected_products[] = $product->id;}
        $user->products()->sync($validated + $current_selected_products);

        return back()->with('success', true);
    }

    // public function create()
    // {
    // }

    public function store(StoreProductRequest $request)
    {
        $validated                  = $request->safe()->all();
        $validated                  = $validated + array('slug' => Str::slug($validated['name']));
        $product                    = Product::create($validated);

        return back()->with('status', 'Product '. $product->name .' created!');
    }

    public function show(Int $category_id)
    {
        $products           = ProductCategory::findOrFail($category_id)->products;
        $product_categories = ProductCategory::all();
        $user = Auth::user(); $current_selected_products = [];
        foreach($user->products as $product) {$current_selected_products[] = $product->id;}
        $cart_count         = count($current_selected_products);

        return view('products.index', compact('category_id', 'product_categories', 'products', 'cart_count', 'current_selected_products'));
    }

    // public function edit(Product $product)
    // {
    // }

    public function update(StoreProductRequest $request, Product $product)
    {
        $validated                     = $request->safe()->all();
        $product->name                 = $validated['name'];
        $product->product_category_id  = $validated['product_category_id'];
        $product->slug                 = Str::slug($validated['name']);
        $product->price                = $validated['price'];
        $product->short_description    = $validated['short_description'];
        $product->long_description     = $validated['long_description'];
        $product->save();

        return back()->with('status', 'Product '. $product->name .' updated!');
    }

    public function destroy(Product $product)
    {
        if (!$product->trashed()) {
            $product->delete();
            return redirect(route('products.product-listing'))->with('status', 'Product '. $product->name .' deleted!');
        }
        abort(403);
    }

    public function restore($id)
    {
        $product       = Product::onlyTrashed()->findOrFail($id);
        $product->restore();
        return back()->with('status', 'Product '. $product->name .' restored!');
    }
}
