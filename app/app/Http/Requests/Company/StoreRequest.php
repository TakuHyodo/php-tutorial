<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => ['required', 'string'],
            'prefecture_id' => ['required', 'string'],
            'memo' => ['nullable', 'string'],
            'image' => ['nullable', 'mimetypes:image/jpeg,image/png'],// 追加
        ];
    }

    public function attributes()
    {
        return [
            'company_name' => '車名',
            'prefecture_id' => '排気量',
            'memo' => 'メモ',
        ];
    }
}
