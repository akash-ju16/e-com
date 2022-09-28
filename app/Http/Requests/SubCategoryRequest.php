<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
                'mcategory' => ['required'],
                'sub_cat_name' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'mcategory.required' => 'Please select a main category name',
            'sub_cat_name.required' => 'Please input sub category name',
        ];
    }
}
