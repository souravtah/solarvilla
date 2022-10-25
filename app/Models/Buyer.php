<?php

namespace App\Models;

use App\Models\Invoice;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buyer extends Model
{
    use HasFactory;

    public $guarded = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class,  'invoice_number',  'invoice_number');
    }
}
