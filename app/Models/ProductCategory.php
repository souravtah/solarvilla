<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

//use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['products'];

    public $guarded = [];

    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
}
