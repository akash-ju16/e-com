<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Subcategorie;

/** 
 * Class Description
 * This class use for productDisplay, productStore, productUpdate and so on..
 * Author: Akash 
*/

class ProductController extends Controller
{
    /** 
     * default need load usnig construct function
    */
    public function __construct(){
        
    }

    public function showProduct(){
        
        $maincategory = allMainCategory();

        return view('backend.pages.view_add_new_product', ['maincategory' => $maincategory]);
    }

    /** 
     * product store method 
     * 
    */
    public function productStore(Request $request){

        /** form validation */
        $request->validate([
            'prod_name'           => 'required',
            'prod_description'    => 'required',
            'prod_price'          => 'required',
            'unit_selct'          => 'required',
            'prod_stock'          => 'required',
            'category_select'     => 'required',
            'sub_category_select' => 'required',
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
    dd($request->input('prod_description'));

    }
}
