<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/** Register Route */
Route::get('/register', function () {
    return view('backend/register');
});

Route::get('/admin', function () {
    return view('backend/pages/home');
});

Route::get('/project-detail', function () {
    return view('backend/pages/project-detail');
});