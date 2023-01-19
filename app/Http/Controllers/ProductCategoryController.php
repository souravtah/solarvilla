<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
//use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Requests\ProductCategoryUpdateRequest;

class ProductCategoryController
{
    public function index()
    {
        $product_categories         = ProductCategory::withTrashed()->paginate();
        $total_product_categories   = $product_categories->count();

        return view('product-categories.index', compact('product_categories', 'total_product_categories'));
    }

    // public function create()
    // {
    // }

    public function store(ProductCategoryUpdateRequest $request)
    {
        $validated                  = $request->safe()->only(['name', 'description']);
        $validated                  = $validated + array('slug' => Str::slug($validated['name']));
        $product_category           = ProductCategory::create($validated);

        return redirect()->route('product-categories.index')
                    ->with('status', 'Product category '. $product_category->name .' created!');
    }

    // public function show(ProductCategory $product_category)
    // {
    // }

    // public function edit(ProductCategory $product_category)
    // {
    // }

    public function update(ProductCategoryUpdateRequest $request, ProductCategory $product_category)
    {
        $validated                              = $request->safe()->only(['name', 'description']);
        $product_category->name                 = $validated['name'];
        $product_category->slug                 = Str::slug($validated['name']);
        $product_category->description          = $validated['description'];
        $product_category->save();

        return redirect()->route('product-categories.index')
                    ->with('status', 'Product category '. $product_category->name .' updated!');
    }

    public function destroy(ProductCategory $product_category)
    {
        if (!$product_category->trashed()) {
            $product_category->delete();
            return redirect(route('product-categories.index'))->with('status', 'Product Category '. $product_category->name .' deleted!');
        }
        abort(403);
    }

    public function restore($id)
    {
        $product_category       = ProductCategory::onlyTrashed()->findOrFail($id);
        $product_category->restore();
        return redirect()->route('product-categories.index')->with('status', 'Product Category '. $product_category->name .' restored!');
    }

    public function force_delete(ProductCategory $product_category)
    {
        $product_category->forceDelete();
        return redirect()->route('product_categories.index')->with('status', 'Product category '. $product_category->name .' permanently deleted!');
    }
}
