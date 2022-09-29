<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            //'title'     => 'required|in:1,2,3,4,5',
            'name'      => 'required|max:25|string',
            'email'     => 'required|unique:users|max:100|email:rfc',
            'phone'     => 'required|unique:users|size:10',
            'role'      => 'required|exists:roles,name'
        ];
    }
}
