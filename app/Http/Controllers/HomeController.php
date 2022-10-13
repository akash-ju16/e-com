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
        // echo '<pre>';
        // // // $data = collect($allCategory)->;
        foreach ($allCategory as $category) {
            $category->sub = $category->subcategorie;
            // foreach ($category->subcategorie as $scategory) {
            //     $scategory->childCategoryData = $category->ChildCategory;
            // }
        }
        // dd($allCategory);
        //
        // print_r($allCategory->toArray());

        // $data = array();
        // foreach($allCategory as $item){
        //     // echo $item.'<br><br><br>';
        //     $item['test'] = 'test';
        //     foreach($item->Subcategorie as $sub){

        //     }
        //     $data = $item;
        // }
        // print_r($data);
        // exit;
        
        return view('frontend.layouts.app', ['allCategory' => $allCategory]);
    }
}
