<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'              => 'required|max:191|string',
            'mobile'            => 'required|max_digits:10|numeric',
            'email'             => 'required|max:191|email|string',
            'power_consumption' => 'required|numeric',
            'avg_monthly_bill'  => 'required|numeric'
        ];
    }
}
