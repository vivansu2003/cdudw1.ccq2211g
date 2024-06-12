<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Cho phép tất cả các yêu cầu
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:6',
            'image' => 'nullable|image', // Kiểm tra image là tệp tin
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'detail' => 'nullable|string',
            'price' => 'required|numeric',
            'pricesale' => 'nullable|numeric',
            'qty' => 'required|integer',
            'description' => 'nullable|string',
            'status' => 'required|integer',
        ];
    }
}
