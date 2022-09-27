<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Traits\ResizeImage;
use App\Models\{Categorie,Subcategorie,ChildCategory};
use App\Interfaces\Category\CategoryInterface;
use App\Http\Requests\CategoryRequest;

class MainCatController extends Controller
{
    /** using trait */
    use ResizeImage;

    private $category;
    private $subcategory;
    private $childcat;
    private $categoryRepository;

    public function __construct(Categorie $cat, Subcategorie $subcat, CategoryInterface $categoryRepository){
        $this->category    = $cat;
        $this->subcategory = $subcat;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * category list
     * 
     * @param null
     * @return Illuminate\Http\Response
     */
    public function category_list(){

        // dd(Auth::User());
        // $uppercase = allUpper('hello'); // from helper function
        // dd($uppercase);

        $cat_data = $this->categoryRepository->getCategoryAll();

        return view('backend.pages.view_category', ['data'=>$cat_data]);
    }

    /** 
     * edit category 
     * 
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Response
     */
    public function edit_category(Request $request){

        $cid = $request->cid;
        $cat_data = $this->categoryRepository->getCategoryById($cid);

        return view('backend.pages.view_edit_category', ['data'=>$cat_data]);
    }

    /**
     * create category
     * 
     * @param App\Http\Requests\CategoryRequest
     * @return 
     */
    public function add_category(CategoryRequest $request){
        //form validation
        $request->validated();

        //dd($request->all());
        //dd($request->file('cat_image')->getExtension());

        // $categoryDetails = $request->except('_token');
        $categoryDetails['en_name'] = $request->cat_name;
        $categoryDetails['bn_name'] = $request->cat_name_bangla;


        // $category = new Categorie();
        /**
         * authorization people can only add categories
         */
        // if(Gate::denies('isAdmin', $category)){
        //     abort(403, 'you are not authorized');
        // }
        
        if ($request->hasFile('cat_image')) {
            $image_file = $request->cat_image;
            $path = 'images/';
            $image_name = $this->imageresize($image_file, $path); //using trait
        }
        $categoryDetails['cat_img_name'] = !empty($image_name) ? $image_name : '';
        
        // dd($categoryDetails);
        $this->categoryRepository->createCategory($categoryDetails);

        return redirect(route('category'))->with('status', 'category insert successfully');
    }

    /**
     * update category
     * 
     * @param App\Http\Requests\CategoryRequest
     */
    public function update_category(CategoryRequest $request)
    {

        //form validate
        $request->validated();

        //category oldest data
        $oldcategory = $this->categoryRepository->getCategoryById($request->cid);

        //from user input
        $categoryDetails['en_name'] = $request->cat_name;
        $categoryDetails['bn_name'] = $request->cat_name_bangla;

        //image file
        if ($request->hasFile('cat_image')) {

            //remove old file
            $opath = public_path().'/images/';
            if($oldcategory->cat_img_name != ''  && $oldcategory->cat_img_name != null){
                $file_old = $opath.$oldcategory->cat_img_name;
                unlink($file_old);
            }

            $image_file = $request->cat_image;
            $path = 'images/';
            $image_name = $this->imageresize($image_file, $path); //using trait
            $categoryDetails['cat_img_name'] = $image_name;
        }
        
        
        // dd($categoryDetails);
        $this->categoryRepository->updateCategory($request->cid, $categoryDetails);

        return redirect(route('category'))->with('status', 'category updated successfully');
    }

    /**
     * 
     * destroy_category
     */
    public function destroy_category($cid)
    {
        dd($cid);
        $this->categoryRepository->deleteCategory($cid);

        return redirect(route('category'))->with('status', 'category deleted successfully');
    }
}
