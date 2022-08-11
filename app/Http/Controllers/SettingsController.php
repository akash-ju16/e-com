<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;

class SettingsController extends Controller
{
    
    public function categoryList(){
        return view('backend.pages.view_category');
    }

    /**
     * add category 
     */
    public function addCategory(Request $request){
        

        //form validation
        $request->validate([
            'cat_name' => ['required'],
            'cat_name_bangla' => ['required'],
            'cat_image' => ['required']
        ]);

        // dd($request->all());

        $cat = new Categorie();

        $cat->en_name = $request->input('cat_name');
        $cat->bn_name = $request->input('cat_name_bangla');
        $cat->cat_img_name = $request->input('cat_image');

        $cat->save();

        return redirect(route('category'))->with('status', 'category inster successfully');
    }

    public function subCategoryList(){
        return view('backend.pages.view_sub_category');
    }
}
