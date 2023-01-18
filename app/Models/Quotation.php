<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    public $guarded = [];

    public function buyer()
    {
        return $this->hasOne(Buyer::class, 'invoice_number',  'quotation_number');
    }
}
