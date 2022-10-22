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
            'name'                  => 'Product_1',
            'productcategory_id'    => 1
        ]);
        Product::create([
            'name'                  => 'Product_2',
            'productcategory_id'    => 2
        ]);
        Product::create([
            'name'                  => 'Product_3',
            'productcategory_id'    => 3
        ]);
    }
}
