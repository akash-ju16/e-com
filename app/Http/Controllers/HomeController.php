<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;

class HomeController extends Controller
{
    /** 
     * index page // home page
    */
    public function index()
    {
        echo '<pre>';
        print_r(new Categorie);exit;
        return view('frontend.layouts.app');
    }
}
