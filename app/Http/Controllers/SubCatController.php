<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Categorie,Subcategorie};
use App\Interfaces\Category\CategoryInterface;
use App\Interfaces\Category\SubCategoryInterface;
use App\Http\Requests\SubCategoryRequest;

class SubCatController extends Controller
{
    private $mainCateRepository;
    private $subCateRepository;

    public function __construct(CategoryInterface $mainCateRepository, SubCategoryInterface $subCateRepository)
    {
        $this->mainCateRepository = $mainCateRepository;
        $this->subCateRepository  = $subCateRepository;
    }

    /**
     * sub category list
     * 
     * @param null 
     * @return Illuminate\Http\Response
     */
    public function subCategoryList()
    {
        $cat_data     = $this->mainCateRepository->getCategoryAll();
        $subcategorie = $this->subCateRepository->getSubCategoryWithCategory();
        return view('backend.pages.view_sub_category', ['mdata'=>$cat_data, 'cat_sub_main_data'=>$subcategorie]);
    }

    /** 
     * create sub category
     * 
     * @param App\Http\Requests\SubCategoryRequest
     * @return Illuminate\Http\Response
    */
    public function addSubCategory(SubCategoryRequest $request)
    {

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
     * 
     * @param subcategory_id
     * @return Illuminate\Http\Response
     */
    public function editSubCategory($scid)
    {
        $mcat_data = $this->mainCateRepository->getCategoryAll();
        $cat_data  = $this->subCateRepository->getCategoryById($scid);
        return view('backend.pages.view_edit_sub_category', ['mdata'=>$mcat_data, 'data'=>$cat_data]);
    }

    /**
     * update sub category
     * 
     * @param App\Http\Requests\SubCategoryRequest
     * @return Illuminate\Http\Response
     */
    public function updateSubCategory(SubCategoryRequest $request)
    {
        //form validation 
        $request->validated();

        //sub category oldest data
        $oldSubcategory = $this->subCateRepository->getCategoryById($request->scid);

        //from user input
        $subCategoryDetails['en_name']      = $request->sub_cat_name;
        $subCategoryDetails['bn_name']      = $request->sub_cat_name_bangla;
        $subCategoryDetails['categorie_id'] = $request->mcategory;
        
        // dd($subCategoryDetails);
        $this->subCateRepository->updateCategory($request->scid, $subCategoryDetails);

        return redirect(route('subcategory'))->with('status', 'sub category updated successfully');
    }

    /**
     * delete category
     * 
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Response
     */
    public function destroySubCategory($scid)
    {
        $this->subCateRepository->deleteCategory($scid);

        return redirect(route('subcategory'))->with('status', 'sub category deleted successfully');
    }
    

    
}
