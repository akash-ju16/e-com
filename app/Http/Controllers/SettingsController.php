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

         //dd($request->all());
        //dd($request->file('cat_image')->getExtension());

        $category = new Categorie();

        $category->en_name = $request->input('cat_name');
        $category->bn_name = $request->input('cat_name_bangla');
        //image store
        $image = $request->cat_image;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/images', $name);

        $category->cat_img_name = $name;

        $category->save();

        return redirect(route('category'))->with('status', 'category inster successfully');
    }

    public function subCategoryList(){
        return view('backend.pages.view_sub_category');
    }
}
