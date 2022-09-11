<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;


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

    //pages 
    /** category */
    Route::get('/category/add', [SettingsController::class, 'category_list'])->middleware(['can:viewAny, App\Models\Categorie'])->name('category');
    Route::post('/category/add', [SettingsController::class, 'addCategory'])->name('catepost');
    Route::get('/category/edit/{cid}', [SettingsController::class, 'edit_category']);
    Route::get('/category/add-sub-category', [SettingsController::class, 'sub_category_list'])->name('subcategory');
    Route::get('/category/add-child-category', [SettingsController::class, 'child_category_list'])->name('childcategory');
    Route::post('/category/sub-category', [SettingsController::class, 'add_sub_category'])->name('subcatepost');
    Route::post('/category/child-category', [SettingsController::class, 'add_child_category'])->name('childcatepost');
    Route::get('/category/sub-category/edit/{scid}', [SettingsController::class, 'edit_sub_category']);
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