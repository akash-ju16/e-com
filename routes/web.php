<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProductController;
 use App\Test;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// app()->bind('newf', Test::class);

// Route::get('/', function () {
//     $data = app()->make('newf');
//     echo $data->name;
//     dd(app());
//     return view('welcome');
// });

/** Home Dashboard */
Route::get('/admin', function () {
    return view('backend/pages/view_home');
})->name('admin');

/** Register Route */
Route::get('/register', function () { return view('backend/auth/pages/register'); })->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

/** Login Route */
Route::get('/login', function () {
    return view('backend/auth/pages/login');
})->name('login');

Route::post('/login', [LoginController::class, 'userLogin'])->name('login');

Route::get('/logout', [LoginController::class, 'userLogout'])->name('logout');

Route::get('/project-detail', function () {
    return view('backend/pages/view_project_details');
})->name('project-detail');

//pages 
Route::get('/category', [SettingsController::class, 'categoryList'])->name('category');
Route::post('/category', [SettingsController::class, 'addCategory'])->name('catepost');
Route::get('/sub-category', [SettingsController::class, 'subCategoryList'])->name('subcategory');
Route::get('/new-product', [ProductController::class, 'addNewProduct'])->name('newproduct');

