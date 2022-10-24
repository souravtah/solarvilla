<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class EvaluateCartRequest extends FormRequest
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'product_id.*'          => 'required|numeric|exists:products,id',
            'product_name.*'        => 'required|string|exists:products,name',
            'price.*'               => 'required|numeric|min:1',
            'quantity.*'            => 'required|numeric|min:1',
            'description.*'         => 'string|nullable',
            'discount.*'            => 'required|numeric|min:0',
        ];
    }
}
