<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    public function userLoginCustom(Request $req)
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
        $req->session()->put('user', $username);
        //echo $req->session()->get('user');exit; 
        
        return redirect(route('admin'));
    }

    public function userLogin(Request $request)
    {
        // dd(print_r($request));
        $credential = $request->validate([
                'username' => ['required', 'email'],
                'userpass' => ['required']
        ]);

        if (Auth::attempt(['email'=>$request->input('username'), 'password'=>$request->input('userpass')]))
        {
            return "Success";
        }
        else
        {
            return "Fail";
        }

    }

    public function userLogout(Request $request){

        $request->session()->forget('user');

        return redirect(route('login'));
    }
}
