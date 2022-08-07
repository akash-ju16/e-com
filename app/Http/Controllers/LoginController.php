<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{

    /**
     * function userLoginCustom
     * this function written as procedural way
     */
    public function userLoginCustom(Request $req)
    {
        //  dd( $req->input('username'));

        //validate
        $req->validate([
            'username' => ['required','email'],
            'userpass' => ['required','size:5']
        ]);

        //from user input
         $username = $req->input('username');
         $password = $req->input('userpass');

        //display query using toSql()
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

    /**
     * function userLogin()
     * using auth facades 
     */

    public function userLogin(Request $request)
    {
        // dd(print_r($request));
        $credential = $request->validate([
                'username' => ['required', 'email'],
                'userpass' => ['required', 'size:5']
        ]);

        // dd($request->username);

        //authentication using auth::attempt()
        if (Auth::attempt(['email'=>$request->username, 'password'=>$request->userpass]))
        {
            $request->session()->regenerate();

            session('')

            return redirect()->intended('admin');
            // return redirect(route('admin'));
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function userLogout(Request $request){

        $request->session()->forget('user');

        return redirect(route('login'));
    }
}
