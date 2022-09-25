<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\ResizeImage;
use App\Models\{Categorie,Subcategorie,ChildCategory};

class SubCatController extends Controller
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
     * edit sub category 
     */
    public function edit_sub_category(Request $request, $scid){
        $scid = $request->cid;

        $cat_data = $this->subcategory->where('id', $scid)->first();
        dd($scid);
        return view('backend.pages.view_edit_sub_category', ['data'=>$cat_data]);
    }

    public function sub_category_list(){

        $cat_data     = $this->category->all();
        $subcategorie = $this->subcategory->with('categorie')->get();

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
     * add_sub_category
     * @param 
     * @return 
    */
    public function add_sub_category(Request $request){

        //validation form
        $request->validate(
            [
                'mcategory' => ['required'],
                'sub_cat_name' => ['required'],
                // 'sub_cat_image' => ['required'],
            ],
            [
                'mcategory.required' => 'Please select a main category name',
                'sub_cat_name.required' => 'Please input sub category name',
                // 'sub_cat_image.required' => 'attached your sub category image',
            ]
        );

        //after successfully validated then below code executed

        // $data = $request->except('_token');

        /** Polices authorizations */
        $this->authorize('isAdmin', Categorie::class);

        /**another way to authorization */
        // if(Auth::user()->cannot('isAdmin', Categorie::class)){
        //     abort(403);
        // }

        $subcategory = new Subcategorie();

        $subcategory->en_name = $request->input('sub_cat_name');
        $subcategory->bn_name = $request->input('sub_cat_name_bangla');
        $subcategory->categorie_id = $request->input('mcategory');
        if ($request->hasFile('sub_cat_image')) {
            $image_file = $request->sub_cat_image;
            $path = 'images/subimages/';
            $image_name = $this->imageresize($image_file, $path); //using trait
        }

        $subcategory->image_name = !empty($image_name) ? $image_name : '';

        $subcategory->save();

        return redirect(route('subcategory'))->with('status', 'sub category insert successfully');

    }
}
