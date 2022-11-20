<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function categoryItem()
    {
        return view('category_item_display');
    }


    /** 
     * t-shirt shop
    */
    public function tTemplate()
    {
        return view('tshirt_shop');
    }
}
