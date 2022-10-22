<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        ProductCategory::unsetEventDispatcher();
        ProductCategory::create([
            'name'                  => 'Product_Category_1',
        ]);
        ProductCategory::create([
            'name'                  => 'Product_Category_2',
        ]);
        ProductCategory::create([
            'name'                  => 'Product_Category_3',
        ]);
    }
}
