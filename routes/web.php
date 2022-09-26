<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RegisterController,LoginController,ProductController,
    ServiceController,HomeController,MainCatController,SubCatController,ChildCatController,
    DependencyControler
};


//home page
Route::get('/', [HomeController::class, 'index'])->name('homepg');

/** Register Route */
Route::get('/register', function () { 
    if (Auth::check()) {
        return redirect()->route('admin');
    }
    return view('backend/auth/pages/register'); })->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

/** Login Route */
Route::get('/admin/login', function () {
    if (Auth::check()) {
        return redirect()->route('admin');
    }
    return view('backend/auth/pages/login');
})->name('login');

Route::post('/admin/login', [LoginController::class, 'userLogin'])->name('login');
Route::get('/logout', [LoginController::class, 'userLogout'])->name('logout');


Route::middleware('auth')->group(function(){

    /** Dashboard */
    Route::get('/admin', function () {
        return view('backend/pages/view_home');
    })->name('admin');

    /** 
     * pages::
     * 
    */

    /** category */
    Route::get('/category/add', [MainCatController::class, 'category_list'])->middleware(['can:viewAny, App\Models\Categorie'])->name('category');
    Route::post('/category/add', [MainCatController::class, 'addCategory'])->name('catepost');
    Route::get('/category/edit/{cid}', [MainCatController::class, 'edit_category']);
    
    
    /** sub category */
    Route::get('/category/add-sub-category', [SubCatController::class, 'sub_category_list'])->name('subcategory');
    Route::post('/category/sub-category', [SubCatController::class, 'add_sub_category'])->name('subcatepost');
    Route::get('/category/sub-category/edit/{scid}', [SubCatController::class, 'edit_sub_category']);

    /** child category */
    Route::get('/category/add-child-category', [ChildCatController::class, 'child_category_list'])->name('childcategory');
    Route::get('/category/child-category/edit/{ccid}', [ChildCatController::class, 'edit_child_category'])->name('editchild');
    Route::post('/category/child-category', [ChildCatController::class, 'add_child_category'])->name('childcatepost');
    Route::post('/category/child-category/edit/{ccid}', [ChildCatController::class, 'update_child_category'])->name('updatechildcate');
    
    /** dependency page for ajax */
    Route::get('/category/get-sub-category', [DependencyControler::class, 'get_sub_category_list'])->name('getSubCat');


    /** product */
    Route::get('/product/add-new', [ProductController::class, 'product_view'])->middleware(['can:isAdmin'])->name('newproduct');
    Route::post('/product/add-new', [ProductController::class, 'product_store'])->name('addproduct');
    Route::get('/product/list', [ProductController::class, 'product_display'])->name('product');
    Route::get('/product/view/{pid}', [ProductController::class, 'product_details']);
    Route::get('/product/edit/{pid}', [ProductController::class, 'product_edit'])->name('productedit');
    Route::post('/product/edit/{pid}', [ProductController::class, 'product_update'])->name('updateproduct');


    //Test pages

});


//custom service pages
Route::get('/service', [ServiceController::class, 'displayService']);