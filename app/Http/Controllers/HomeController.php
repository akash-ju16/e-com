<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Categorie, Subcategorie, ChildCategory};
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /** 
     * index page // home page
    */
    public function index()
    {

        $allCategory = Categorie::with(['Subcategorie' => function ($query) {
            $query->with(['ChildCategory']);
        }])->get();

        // ddd($allCategory);
        // print_r($allCategory->toArray());

        
        return view('frontend.layouts.app', ['allCategory' => $allCategory]);
    }
}
