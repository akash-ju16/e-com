<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    
    public function categoryList(){
        return view('backend.pages.view_category');
    }

    public function subCategoryList(){
        return view('backend.pages.view_sub_category');
    }
}
