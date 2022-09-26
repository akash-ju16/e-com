<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategorie;

class DependencyControler extends Controller
{
     /**
     * get subcategory list 
     * 
     * @param \Illuminate\Http\Request
     * @return json
     */
    public function get_sub_category_list(Request $request)
    {
        
        $subcategory = Subcategorie::where('categorie_id', $request->cat_id)->get();
        // dd($subcategory->toArray());
        if (count($subcategory) > 0) {
            return response()->json($subcategory);
        }

    }
}
