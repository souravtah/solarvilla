<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmptyCartRequest extends FormRequest
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'productIds'           => 'required|array|exists:products,id',
        ];
    }
}
