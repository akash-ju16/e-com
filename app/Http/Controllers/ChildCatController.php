<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChildCategoryRequest;
use Illuminate\Http\Request;
use App\Interfaces\Category\ChildCategoryInterface;
use App\Interfaces\Category\CategoryInterface;
use App\Interfaces\Category\SubCategoryInterface;


class ChildCatController extends Controller
{
    private $childRepository;
    private $categoryRepository;
    private $subCategoryRepository;

    public function __construct(ChildCategoryInterface $childRepository, CategoryInterface $categoryRepository, SubCategoryInterface $subCategoryRepository)
    {
        $this->childRepository = $childRepository;
        $this->categoryRepository = $categoryRepository;
        $this->subCategoryRepository = $subCategoryRepository;
    }

     /**
     * child category list
     * 
     * @param null
     * @return Illuminate\Http\Response
     */
    public function childCategoryList()
    {

        $childcategory  = $this->childRepository->getChildCategoryWithCategoryWirhSubCategory(); 
        //main-category
        $mainCategory = $this->categoryRepository->getCategoryAll();
        //sub-category
        $subCategory = $this->subCategoryRepository->getCategoryAll();
        // return $childcategory;
        //  dd($childcategory->toArray());
        return view('backend.pages.view_child_category', ['data' => $childcategory, 'maincat'=>$mainCategory, 'subcat'=>$subCategory]);

    }

    /** 
     * create child category
     * 
     * @param \App\Http\Requests\ChildCategoryRequest
     * @return \Illuminate\Http\Response
    */
    public function addChildCategory(ChildCategoryRequest $request){
        // dd($request->input());

        //validation form
        $request->validated();
        
        $data = $request->except('_token', 'category_select', 'sub_category_select');
        $data['categories_id']      =  $request->input('category_select', true);
        $data['subcategories_id']   =  $request->input('sub_category_select', true);
        
        $this->childRepository->createCategory($data);
        
        return redirect(route('childcategory'))->with('status', 'child category insert successfully');

    }

    /**
     * edit child category
     * 
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function editChildCategory(Request $request) 
    {

        $data = $this->childRepository->getCategoryById($request->ccid);  
        //main-category
        $mainCategory = $this->categoryRepository->getCategoryAll();
        //sub-category
        $subCategory = $this->subCategoryRepository->getCategoryAll();
        
        return view('backend.pages.view_edit_child_category', ['data'=>$data, 'maincat'=>$mainCategory, 'subcat'=>$subCategory]);
    }

    /**
     * update child category
     * 
     * @param \Illuminate\Http\ChildCategoryRequest
     * @return \Illuminate\Http\Response
     */
    public function updateChildCategory(ChildCategoryRequest $request) 
    {
        //form validate
        $request->validated();

        //old child category data
        $oldData = $this->childRepository->getCategoryById($request->ccid);

         //from user input
        $childCategoryDetails = $request->except('_token', '_method', 'category_select', 'sub_category_select');
        $childCategoryDetails['categories_id']      =  $request->category_select;
        $childCategoryDetails['subcategories_id']   =  $request->sub_category_select;
         
        //dd($childCategoryDetails);
         $this->childRepository->updateCategory($request->ccid, $childCategoryDetails);
 
         return redirect(route('childcategory'))->with('status', 'child category updated successfully');
    }

}
