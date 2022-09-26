<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChildCategoryRequest;
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

        $childcategory  = $this->childcategory::with(['subcategorie','maincategory'])->get(); 

        //main-category
        $maincat = Categorie::all(); //it's a redundency

        //sub-category
        $subcat = Subcategorie::all(); //it's a redundency
        
        // return $childcategory;
        //  dd($childcategory->toArray());
        return view('backend.pages.view_child_category', ['data' => $childcategory, 'maincat'=>$maincat, 'subcat'=>$subcat]);

    }

    /** 
     * child category entry
     * 
     * @param \App\Http\Requests\ChildCategoryRequest
     * @return \Illuminate\Http\Response
    */
    public function add_child_category(ChildCategoryRequest $request){
        // dd($request->input());

        //validation form
        $request->validated();
        
        $data = $request->except('_token');
        $data['categories_id']      =  $request->input('category_select', true);
        $data['subcategories_id']   =  $request->input('sub_category_select', true);
        // dd($data);
        $this->childcat->create($data);
        
        return redirect(route('childcategory'))->with('status', 'child category insert successfully');

    }

    /**
     * child category edit
     * 
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
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
