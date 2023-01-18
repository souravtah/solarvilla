<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Buyer;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //use HasFactory;

    //public $guarded = [];
    public $timestamps = false;

    protected $fillable = ['user_id',
                            'invoice_number',
                            'product_id',
                            'product_name',
                            'price',
                            'quantity',
                            'description',
                            'discount',
                            'updated_at',
                            'created_at'];

    public function buyer()
    {
        return $this->hasOne(Buyer::class, 'invoice_number',  'invoice_number');
    }
}
