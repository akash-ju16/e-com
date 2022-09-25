<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Categorie,Subcategorie,ChildCategory};


class ChildCatController extends Controller
{
    protected $childcategory;

    public function __construct(ChildCategory $childcat)
    {
        $this->childcategory = $childcat;
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

        $childcategory  = $this->childcategory::with(['subcategorie','maincategory'])->get(); //Bottom to Top
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

    /**
     * edit_child_category
     */
    public function edit_child_category(Request $request) 
    {
        $cid  = $request->ccid;
        $data = $this->childcategory->where('id', $cid)->first();
        
        //main-category
        $maincat = Categorie::all(); //it's a redundency

        //sub-category
        $subcat = Subcategorie::all(); //it's a redundency
        
        return view('backend.pages.view_edit_child_category', ['data'=>$data, 'maincat'=>$maincat, 'subcat'=>$subcat]);
    }

    /**
     * update_child_category
     */
    public function update_child_category(Request $request) 
    {
        dd($request->all());
    }

}
