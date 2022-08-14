<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Image;

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
        
        $image_file = $request->cat_image;
        $image_name = $image_file->getClientOriginalName();

        /** image resize using php intervention package */
        $resize_image = Image::make($image_file->getRealPath());
        $resize_image->resize(100, 80);
        $resize_image->save('images/' .$image_name);

        /** image store */
        // $image_file->storeAs('public/images', $image_name);

        $category->cat_img_name = $image_name;
        $category->save();

        return redirect(route('category'))->with('status', 'category insert successfully');
    }

    public function subCategoryList(){
        return view('backend.pages.view_sub_category');
    }
}
