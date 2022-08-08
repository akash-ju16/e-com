<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addNewProduct(){
        return view('backend.pages.view_add_new_product');
    }
}
