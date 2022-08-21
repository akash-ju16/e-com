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
    Route::get('/category', [SettingsController::class, 'categoryList'])->name('category');
    Route::post('/category', [SettingsController::class, 'addCategory'])->name('catepost');
    Route::get('/sub-category', [SettingsController::class, 'subCategoryList'])->name('subcategory');
    Route::post('/sub-category', [SettingsController::class, 'addSubCategory'])->name('subcatepost');
    Route::get('/new-product', [ProductController::class, 'addNewProduct'])->name('newproduct');


    //Test pages

});


//custom service pages
Route::get('/service', [ServiceController::class, 'displayService']);