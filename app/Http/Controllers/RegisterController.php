<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //register data store
    public function store(Request $request)
    {
        dd($request->input());

        // $data = array(
        //     $name => $request->input('full_name'),
        //     $email => $request->input('email'),
        //     $pass => $request->input('password'),
        //     $confirm_password => $request->input('confirm_password'),
        // );
    }
}
