<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\ResizeImage;
use App\Models\{Categorie,Subcategorie,ChildCategory};
use App\Interfaces\Category\CategoryInterface;
use App\Interfaces\Category\SubCategoryInterface;
use App\Http\Requests\SubCategoryRequest;

class SubCatController extends Controller
{
    /** using trait */
    use ResizeImage;

    private $category;
    private $subcategory;
    private $childcat;
    private $mainCateRepository;
    private $subCateRepository;

    public function __construct(Categorie $cat, Subcategorie $subcat, CategoryInterface $mainCateRepository, SubCategoryInterface $subCateRepository){
        $this->category    = $cat;
        $this->subcategory = $subcat;
        $this->mainCateRepository = $mainCateRepository;
        $this->subCateRepository  = $subCateRepository;
    }

    /**
     * sub category list
     * 
     * @param null 
     * @return Illuminate\Http\Response
     */
    public function sub_category_list(){
        $cat_data     = $this->mainCateRepository->getCategoryAll();
        $subcategorie = $this->subcategory::with('categorie')->get();
        return view('backend.pages.view_sub_category', ['mdata'=>$cat_data, 'cat_sub_main_data'=>$subcategorie]);
    }

    /** 
     * create sub category
     * 
     * @param App\Http\Requests\SubCategoryRequest
     * @return Illuminate\Http\Response
    */
    public function add_sub_category(SubCategoryRequest $request){

        //validation form
        $request->validated();

        /** Polices authorizations */
        $this->authorize('isAdmin', Categorie::class);

        /**another way to authorization */
        // if(Auth::user()->cannot('isAdmin', Categorie::class)){
        //     abort(403);
        // }

        // $subCategoryDetails = $request->except('_token');
        
        $subCategoryDetails['en_name']      = $request->sub_cat_name;
        $subCategoryDetails['bn_name']      = $request->sub_cat_name_bangla;
        $subCategoryDetails['categorie_id'] = $request->mcategory;
        // dd($subCategoryDetails);
        
        $this->subCateRepository->createCategory($subCategoryDetails);

        return redirect(route('subcategory'))->with('status', 'sub category insert successfully');

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

    

    
}
