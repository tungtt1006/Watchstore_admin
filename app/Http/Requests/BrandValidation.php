<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandValidation extends FormRequest
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
           'brand' => 'required',
           'sex' => 'required',
           'img_url' => 'file'
        ];
    }
    public function messages()
    {
        return [
            'brand.required' => 'Brand name is required!',
            'sex.required' => 'Sex is required!',
            'img_url.file' => 'Must be a file!',
        ];
    }
}
