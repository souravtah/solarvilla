<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
            'title'              => 'required|max:191|string',
            'message'            => 'required|string',
            'ticketPriority'     => 'required|in:low,medium,high,critical',
            'category'           => 'required|exists:categories,id',
            'due_date'           => 'nullable|date',
        ];
    }
}
