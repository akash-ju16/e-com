<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RegisterController,LoginController,ProductController,
    ServiceController,HomeController,MainCatController,SubCatController,ChildCatController,
    DependencyControler, PracticeController
};
use App\Http\Controllers\Relation\RelationController;

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

    /** category route */
    Route::get('/category/add', [MainCatController::class, 'categoryList'])->middleware(['can:viewAny, App\Models\Categorie'])->name('category');
    Route::post('/category/add', [MainCatController::class, 'addCategory'])->name('catepost');
    Route::get('/category/edit/{cid}', [MainCatController::class, 'editCategory'])->name('editcat');
    Route::put('/category/edit/{cid}', [MainCatController::class, 'updateCategory'])->name('updatecate');
    Route::get('/category/delete/{cid}', [MainCatController::class, 'destroyCategory'])->name('deletecate');
    
    
    /** sub category route */
    Route::get('/category/add-sub-category', [SubCatController::class, 'subCategoryList'])->name('subcategory');
    Route::post('/category/add-sub-category', [SubCatController::class, 'addSubCategory'])->name('subcatepost');
    Route::get('/category/sub-category/edit/{scid}', [SubCatController::class, 'editSubCategory'])->name('editsubcat');
    Route::put('/category/sub-category/edit/{scid}', [SubCatController::class, 'updateSubCategory'])->name('updatesubcat');
    Route::get('/category/sub-category/delete/{scid}', [SubCatController::class, 'destroySubCategory'])->name('deletesubcate');

    /** child category route */
    Route::get('/category/add-child-category', [ChildCatController::class, 'childCategoryList'])->name('childcategory');
    Route::post('/category/child-category', [ChildCatController::class, 'addChildCategory'])->name('childcatepost');
    Route::get('/category/child-category/edit/{ccid}', [ChildCatController::class, 'editChildCategory'])->name('editchild');
    Route::put('/category/child-category/edit/{ccid}', [ChildCatController::class, 'updateChildCategory'])->name('updatechildcate');
    Route::get('/category/child-category/delete/{ccid}', [ChildCatController::class, 'destroyChildSubCategory'])->name('deletechildcate');
    
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

    /** relation page */
    Route::get('/relation/one-to-one', [RelationController::class, 'oneToOne'])->name('onetoone');
    Route::get('/relation/one-to-many', [RelationController::class, 'oneToMany'])->name('onetomany');
    Route::get('/relation/many-to-many', [RelationController::class, 'manyToMany'])->name('manytomany');

    /** collection */
    Route::get('/collection', [RelationController::class, 'collection'])->name('collection');
});


//custom service pages
Route::get('/service', [ServiceController::class, 'displayService']);

//api page >> from vue to laravel blade
Route::get('/item', [PracticeController::class, 'categoryItem']);
Route::get('/t-shirt', [PracticeController::class, 'tTemplate']);