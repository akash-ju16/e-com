<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Image;
use App\Services\MyFirstInterface;

class SettingsController extends Controller
{
    
    public function categoryList(){

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

        $category->en_name = $request->input('cat_name');
        $category->bn_name = $request->input('cat_name_bangla');
        
        $image_file = $request->cat_image;
        $image_name = $image_file->getClientOriginalName();

        /** image resize using php intervention package */
        $resize_image = Image::make($image_file->getRealPath());
        $resize_image->resize(40, 40);
        $resize_image->save('images/' .$image_name);

        /** image store */
        // $image_file->storeAs('public/images', $image_name);

        $category->cat_img_name = $image_name;
        $category->save();

        return redirect(route('category'))->with('status', 'category insert successfully');
    }

    public function subCategoryList(MyFirstInterface $custom_service){

        //$custom_service->sayHello();
        //$custom_service->sayHi();die;

        $cat_data = Categorie::all();
        //dump($cat_data);
        return view('backend.pages.view_sub_category', ['data'=>$cat_data]);
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

        $data = $request->except('_token');

        // dd($data);





    }
}
