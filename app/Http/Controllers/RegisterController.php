<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Http\Requests\RegistrationRequest;
//use App\Rules\Uppercase;

class RegisterController extends Controller
{
    //Register Data Store
    public function store(RegistrationRequest $request)
    {
        // dd($request->input());

        /**
         * Validation using validate() method
         */

        // $request->validate(
        //     [
        //     'full_name' => ['required', new Uppercase], //custom rule using object
        //     'email'     => ['required', 
        //     function($attribute, $value, $fail){ //custom rule using clousure
        //         if($value === 'a@gmail.com'){
        //             $fail('This email '.$attribute.' not allow' );
        //         }
        //     }],
        //     'password'  => 'required',
        //     'confirm_password' => 'required|same:password',
        //     ],
        //     [ 
        //     'full_name.required' => 'The name field can not be blank value.',
        //     'email.required' => 'The :attribute field can not leave blank.'
            
        //     ]
        // );

        
        /**
         * Validation using FormRequest
         */
        $request->validated();

        /** 
         * Data save   
         * Eloquent object reletion map(ORM)
        */
        $reg = new Register();

        $reg->full_name = $request->input('full_name');
        $reg->email     = $request->input('email');
        $reg->password  = $request->input('password');
        $reg->confirm_password = $request->input('confirm_password');
        $reg->user_level= 'editor';
        $reg->status    = 'inactive';

        $reg->save();

        //redirect 
        return redirect(route('login'));
    }
}
