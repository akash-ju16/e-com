<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    //register data store
    public function store(Request $request)
    {
        // dd($request->input());

        //object create
        $reg = new Register();

        $reg->full_name = $request->input('full_name');
        $reg->email     = $request->input('email');
        $reg->password  = $request->input('password');
        $reg->confirm_password = $request->input('confirm_password');
        $reg->user_level= 'editor';
        $reg->status    = 'inactive';

        $reg->save();
    }
}
