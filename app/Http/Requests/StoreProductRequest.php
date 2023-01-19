<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name'                  => ['required', 'string', 'max:191'],
            'product_category_id'   => ['required', 'exists:product_categories,id'],
            'price'                 => ['required', 'numeric', 'min:0'],
            'short_description'     => ['string', 'max:191'],
            'long_description'      => ['string', 'max:191'],
        ];
    }
}
