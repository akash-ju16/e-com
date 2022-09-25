<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Traits\ResizeImage;
use App\Models\{Categorie,Subcategorie,ChildCategory};

class MainCatController extends Controller
{
    /** using trait */
    use ResizeImage;

    private $category;
    private $subcategory;
    private $childcat;

    public function __construct(Categorie $cat, Subcategorie $subcat){
        $this->category    = $cat;
        $this->subcategory = $subcat;
    }

     /** 
     * edit category 
     */
    public function edit_category(Request $request){
        $cid = $request->cid;
        $cat_data = $this->category->where('id', $cid)->first();
        return view('backend.pages.view_edit_category', ['data'=>$cat_data]);
    }

    

    /**
     * category_list
     */
    public function category_list(){

        // dd(Auth::User());
        // $uppercase = allUpper('hello'); // from helper function
        // dd($uppercase);

        $cat_data = $this->category->all();

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
            // 'cat_image' => ['required']
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

        if ($request->hasFile('cat_image')) {
            $image_file = $request->cat_image;
            $path = 'images/';
            $image_name = $this->imageresize($image_file, $path); //using trait
        }
        $category->cat_img_name =  !empty($image_name) ? $image_name : '';
        $category->save();

        return redirect(route('category'))->with('status', 'category insert successfully');
    }

    
}
