<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Subcategorie;

class ApiController extends Controller
{
    public function getCategories(){

        $category = Categorie::all();

        return response()->json($category);
    }

    public function getSubCategories(Request $request){
        
        $subcategory = Subcategorie::where('categorie_id', $request->country_id)->get();

        return response()->json($subcategory);
    }
}
