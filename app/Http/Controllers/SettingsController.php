<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Http\Traits\ResizeImage;


class SettingsController extends Controller
{
    /** using trait */
    use ResizeImage;

    public function categoryList(){

        // dd(Auth::User());

        $cat_data = Categorie::all();

        return view('backend.pages.view_category', ['data'=>$cat_data]);
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

        /**
         * authorization people can only add categories
         */
        if(Gate::denies('isAdmin', $category)){
            abort(403, 'you are not authorized');
        }

        $category->en_name = $request->input('cat_name');
        $category->bn_name = $request->input('cat_name_bangla');
        
        $image_file = $request->cat_image;
        $path = 'images/';
        $image_name = $this->imageresize($image_file, $path); //using trait

        $category->cat_img_name = $image_name;
        $category->save();

        return redirect(route('category'))->with('status', 'category insert successfully');
    }

    public function subCategoryList(){

        $cat_data = Categorie::all();
        $subcategorie = Subcategorie::with('categorie')->get();

        //     $subcategorie = Categorie::join('subcategories','categories.id', '=', 'subcategories.categorie_id')
        //                         ->get();
        //                         (
        //                             [
        //                                 'categories.en_name as category_name', 
        //                                 'categories.id', 
        //                                 'subcategories.en_name as sub_category_name', 
        //                                 'subcategories.image_name'
        //                             ]
             
        //                         );
        // //     dd($cat_data);
        // // dump($cat_data);
        return view('backend.pages.view_sub_category', ['mdata'=>$cat_data, 'cat_sub_main_data'=>$subcategorie]);
    }

    /** 
     * add sub category
    */
    public function addSubCategory(Request $request){

        //validation form
        $request->validate(
            [
                'mcategory' => ['required'],
                'sub_cat_name' => ['required'],
                'sub_cat_image' => ['required'],
            ],
            [
                'mcategory.required' => 'Please select a main category name',
                'sub_cat_name.required' => 'Please input sub category name',
                'sub_cat_image.required' => 'attached your sub category image',
            ]
        );

        //after successfully validated then below code executed

        // $data = $request->except('_token');

        $subcategory = new Subcategorie();

        $subcategory->en_name = $request->input('sub_cat_name');
        $subcategory->bn_name = $request->input('sub_cat_name_bangla');
        $subcategory->categorie_id = $request->input('mcategory');
        
        $image_file = $request->sub_cat_image;
        $path = 'images/subimages/';
        $image_name = $this->imageresize($image_file, $path); //using trait

        $subcategory->image_name = $image_name;

        $subcategory->save();

        return redirect(route('subcategory'))->with('status', 'sub category insert successfully');

    }
}
