<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Http\Resources\CategoryResource; //using for modify data

class ApiController extends Controller
{
    public function getCategories(){

        // $category = Categorie::all();

        return CategoryResource::collection(Categorie::all());

    //    return response()->json($category);
    }

    public function getSubCategories(Request $request){
        
        $subcategory = Subcategorie::where('categorie_id', $request->country_id)->get();

        return response()->json($subcategory);
    }
}
