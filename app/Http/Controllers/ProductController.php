<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Models\Product;
use App\Http\Traits\ResizeImage;

/** 
 * Class Description
 * This class use for productDisplay, productStore, productUpdate and so on..
 * Author: Akash 
*/

class ProductController extends Controller
{
    /** using trait */
    use ResizeImage;

    /** 
     * load default need usnig construct function
    */
    public function __construct(){
        
    }

    /** 
     * display product details 
    */
    public function ProductDetails(Request $request){
        $pid = $request->pid;
        $product = Product::where('id', $pid)->get();
        return view('backend.pages.view_product_details', ['productItem'=>$product]);
    }

    /** 
     * display product list 
    */
    public function displayProductList(){

        $product = Product::all();
        return view('backend.pages.view_products_list', ['productlist'=>$product]);
    }

    /** 
     * product insert page
    */
    public function showProduct(){

        $maincategory = allMainCategory();

        return view('backend.pages.view_add_new_product', ['maincategory' => $maincategory]);
    }

    /** 
     * product store method 
     * 
    */
    public function productStore(Request $request){
        // dd($request->all());

        /** form validation */
        $request->validate([
            'prod_name'           => 'required',
            'prod_description'    => 'required',
            'prod_price'          => 'required',
            'prod_unit'          => 'required',
            'prod_stock'          => 'required',
            // 'category_select'     => 'required',
            // 'sub_category_select' => 'required',
            'prod_attribute'      => 'required',
            'product_image'       => 'required',
        ],
        [
            'prod_name.required' => 'Product name must be provided',
            'prod_description.required' => 'Product description field is required',
            'prod_price.required' => 'Price field is required',
            'unit_selct.required' => 'Unit field is required',
            'prod_stock.required' => 'Stock field is required',
        ]
    );

    /** after validation  */

     $data = $request->except('_token');

     $data['categories_id'] = $request->input('category_select', true);
     $data['subcategories_id'] = $request->input('sub_category_select', true);

    /** product image area */
    if ($request->hasFile('product_image')){ 
        $img_file = $request->product_image;
        $imgpath = 'images/products/';
        $img_name = $this->productImageResize($img_file, $imgpath); //using trait
     } 

     $data['product_image'] = $img_name;


     $product = Product::create($data);

        return redirect(route('product'))->with('product-status', 'product insert successfully');

    }
}
