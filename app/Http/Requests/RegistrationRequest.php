<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Uppercase;

class RegistrationRequest extends FormRequest
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
                
                'full_name' => ['required', new Uppercase],
                'email'     => 'required',
                'password'  => 'required',
                'confirm_password' => 'required|same:password',
                
        ];
    }

    public function messages(){
        return [
            'full_name.required' => 'The field cant leave empty .',
        ];
    }

    public function attributes(){
        return [
            'email' => 'email address',
        ];
    }
}
