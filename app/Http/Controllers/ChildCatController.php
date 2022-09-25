<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Models\ChildCategory;

class ChildCatController extends Controller
{
    protected $childcat;

    public function __construct(ChildCategory $childcat)
    {
        $this->childcat = $childcat;
        // dd($this->childcat);
    }

     /**
     * child_category_list
     * @param null
     */
    public function child_category_list()
    {
        
       /** 
        * Relation :: category, subcategory, childcategory
        * 3 Table togather ouput a. top to botton and b. bottom to top
        * Top to Bottom: category->subcategory->childcategory
        * Bottom to Top: childcategory->subcategory->category
       */

        $childcategory  = ChildCategory::with(['subcategorie','maincategory'])->get(); //Bottom to Top
         //$childcategory = Subcategorie::with(['categorie','childcategory'])->get(); 
         //$childcategory = Categorie::with(['subcategorie','childcategory'])->get(); //Top to Bottom
        
        // return $childcategory;
        //  dd($childcategory->toArray());
        return view('backend.pages.view_child_category', ['data' => $childcategory]);

    }

    /** 
     * add_child_category
     * @param user_input_Data
     * @return child_cat_list
    */
    public function add_child_category(Request $request){
        // dd($request->input());

        //validation form
        $request->validate(
            [
                'child_en_name' => ['required'],
            ],
            [
                'child_en_name.required' => 'Please input child category name',
            ]
        );
        
        $data = $request->except('_token');
        $data['categories_id']      =  $request->input('category_select', true);
        $data['subcategories_id']   =  $request->input('sub_category_select', true);
        // dd($data);
        $this->childcat->create($data);
        
        return redirect(route('childcategory'))->with('status', 'child category insert successfully');

    }

}
