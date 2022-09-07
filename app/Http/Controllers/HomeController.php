<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** 
     * index page // home page
    */
    public function index(){
        return view('frontend.layouts.app');
    }
}
