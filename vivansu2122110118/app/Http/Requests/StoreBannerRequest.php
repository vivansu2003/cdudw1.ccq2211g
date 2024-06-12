<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
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
            'name' => 'required|string|min:6',
            'slug' => 'required|string',
            'image' => 'string',
            'parent_id' => 'required|integer',
            'sort_order' => 'required|integer',
            'description' => 'string',

            // 'status' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        $messages = [
            'same' => 'Đã tồn tại',
            'required' => 'Bạn chưa điền vào đây',
            'size' => 'Vượt quá :size từ!!',
            'min' => 'Phải lớn hơn hoặc bằng  :min ',
            'max' => 'Phải nhỏ hơn hoặc bằng  :max ',
            'mimes' => 'Không hổ trợ định dạng',
        ];

        return [
            'name.required' => $messages['required'],
            'name.max' => $messages['max'].' từ',
            'name.unique' => 'Tên đã được sử dụng. Vui lòng chon tên khác',

            'metadesc.required' => $messages['required'],
            'metakey.max' => $messages['max'].' từ',

            'metakey.required' => $messages['required'],
            'metakey.max' => $messages['max'].'từ',

            'image.mimes' => $messages['mimes'],
            'image.max' => 'Dung lượng ảnh quá lớn',

        ];
    }
}
