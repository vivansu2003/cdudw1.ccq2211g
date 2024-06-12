<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|exists:users,id',
            'delivery_name' => 'required|string|max:255',
            'delivery_gender' => 'required|string|max:10',
            'delivery_email' => 'required|email|max:255',
            'delivery_phone' => 'required|string|max:15',
            'delivery_address' => 'required|string|max:255',
            'note' => 'nullable|string',
            'status' => 'required|integer',
        ];
    }
}
