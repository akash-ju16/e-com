<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

Route::get('/category', [ApiController::class, 'getCategories']);
Route::get('/subcategory/{country_id}', [ApiController::class, 'getSubCategories']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
