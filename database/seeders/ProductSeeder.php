<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::unsetEventDispatcher();
        Product::create([
            'name'                  => 'Product_Name_1',
            'productcategory_id'    => 1
        ]);
        Product::create([
            'name'                  => 'Product_Name_2',
            'productcategory_id'    => 2
        ]);
        Product::create([
            'name'                  => 'Product_Name_3',
            'productcategory_id'    => 3
        ]);
        Product::create([
            'name'                  => 'Product_Name_14',
            'productcategory_id'    => 1
        ]);
        Product::create([
            'name'                  => 'Product_Name_24',
            'productcategory_id'    => 2
        ]);
        Product::create([
            'name'                  => 'Product_Name_34',
            'productcategory_id'    => 3
        ]);
        Product::create([
            'name'                  => 'Product_Name_15',
            'productcategory_id'    => 1
        ]);
        Product::create([
            'name'                  => 'Product_Name_25',
            'productcategory_id'    => 2
        ]);
        Product::create([
            'name'                  => 'Product_36',
            'productcategory_id'    => 3
        ]);
    }
}
