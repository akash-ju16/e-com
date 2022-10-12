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
        $collection = collect([1, 2, 3])->all();


        $allCategory = Categorie::with(['Subcategorie', 'ChildCategory'])->get();
        echo '<pre>';
        print_r($allCategory);
        
        foreach($allCategory as $item){
            echo $item.'<br>';
        }
        exit;
        
        return view('frontend.layouts.app');
    }
}
