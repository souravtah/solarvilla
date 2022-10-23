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
            'productIds.*'          => 'required|exists:products,id',
            'price.*'               => 'required|numeric',
            'quantity.*'            => 'required|numeric',
            'description.*'         => 'required|string',
        ];
    }
}
