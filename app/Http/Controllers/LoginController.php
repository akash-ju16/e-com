<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class LoginController extends Controller
{
    public function userLogin(Request $req)
    {
        //  dd( $req->input('username'));

        //from user 
         $username = $req->input('username');
         $password = $req->input('userpass');

        //display play query  using toSql()
        // $data = Register::where('email','=', $username)
        //                     ->Where('password', $password)
        //                     ->toSql();

        //get data From register table
        $data = Register::where('email','=', $username)
                            ->Where('password', $password)
                            ->get();
        //result check
        if($data->isEmpty()){
            //if empty :: redirect with failed message
           return redirect(route('login'))->with('status', 'Login failed, please filled out properly');
        }

        //when succes run below code 
        return redirect(route('admin'));
    }
}
