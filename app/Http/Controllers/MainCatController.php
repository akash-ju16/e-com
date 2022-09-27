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

        $cat_data = $this->categoryRepository->getCategoryAll();

        return view('backend.pages.view_category', ['data'=>$cat_data]);
    }

    /**
     * create category in add_category method
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

    
}
