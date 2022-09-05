<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Test;

// app()->bind('newf', Test::class);

// Route::get('/', function () {
//     $data = app()->make('newf');
//     echo $data->name;
//     dd(app());
//     return view('welcome');
// });



/** Register Route */
Route::get('/register', function () { 
    if (Auth::check()) {
        return redirect()->route('admin');
    }
    return view('backend/auth/pages/register'); })->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

/** Login Route */
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('admin');
    }
    return view('backend/auth/pages/login');
})->name('login');

Route::post('/login', [LoginController::class, 'userLogin'])->name('login');
Route::get('/logout', [LoginController::class, 'userLogout'])->name('logout');


Route::middleware('auth')->group(function(){

    /** Dashboard */
    Route::get('/admin', function () {
        return view('backend/pages/view_home');
    })->name('admin');

    //pages 
    /** category */
    Route::get('/category/add', [SettingsController::class, 'categoryList'])->middleware(['can:viewAny, App\Models\Categorie'])->name('category');
    Route::post('/category/add', [SettingsController::class, 'addCategory'])->name('catepost');
    Route::get('/category/edit/{cid}', [SettingsController::class, 'edit_category']);
    Route::get('/category/add-sub-category', [SettingsController::class, 'subCategoryList'])->name('subcategory');
    Route::post('/category/sub-category', [SettingsController::class, 'addSubCategory'])->name('subcatepost');
    Route::get('/category/sub-category/edit/{scid}', [SettingsController::class, 'edit_sub_category']);
    /** product */
    Route::get('/product/add-new', [ProductController::class, 'showProduct'])->middleware(['can:isAdmin'])->name('newproduct');
    Route::post('/product/add-new', [ProductController::class, 'productStore'])->name('addproduct');
    Route::get('/product/list', [ProductController::class, 'displayProductList'])->name('product');
    Route::get('/product/view/{pid}', [ProductController::class, 'ProductDetails']);
    Route::get('/product/edit/{pid}', [ProductController::class, 'ProductEdit']);
    Route::post('/product/edit/{pid}', [ProductController::class, 'ProductUpdate'])->name('updateproduct');


    //Test pages

});


//custom service pages
Route::get('/service', [ServiceController::class, 'displayService']);