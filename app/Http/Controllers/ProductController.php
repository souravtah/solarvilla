<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\SelectProductCategoryRequest;

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
        $products           = Product::withTrashed()->with('product_category')->orderByDesc('updated_at')->paginate();
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

    public function create()
    {
    }

    public function store(StoreProductRequest $request)
    {
        $validated                  = $request->safe()->only(['name', 'description']);
        $validated                  = $validated + array('slug' => Str::slug($validated['name']));
        $product                    = Product::create($validated);

        return redirect()->route('products.product-listing')
                    ->with('status', 'Product '. $product->name .' created!');
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

    public function edit(Product $product)
    {
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated                     = $request->safe()->only(['name', 'description']);
        $product->name                 = $validated['name'];
        $product->slug                 = Str::slug($validated['name']);
        $product->description          = $validated['description'];
        $product->save();

        return redirect()->route('products.product-listing')
                    ->with('status', 'Product '. $product->name .' updated!');
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
        return redirect()->route('products.product-listing')->with('status', 'Product '. $product->name .' restored!');
    }
}
