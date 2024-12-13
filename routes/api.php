<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/Product/new', [App\Http\Controllers\ApiController::class, 'newProduct']);

Route::get('/Product/{id}', [App\Http\Controllers\ApiController::class, 'getproduct']);

Route::post('/Product/update/{id}', [App\Http\Controllers\ApiController::class, 'updateProduct']);

Route::delete('/Product/delete/{id}', [App\Http\Controllers\ApiController::class, 'deleteproduct']);

Route::post('/VisaCategory/new', [App\Http\Controllers\ApiController::class, 'newvisacategory']);

Route::get('/VisaCategory/{id}', [App\Http\Controllers\ApiController::class, 'getvisacategory']);

Route::delete('/VisaCategory/delete/{id}', [App\Http\Controllers\ApiController::class, 'deletevisacategory']);





