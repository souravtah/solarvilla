<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use SoftDeletes;

    public $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
