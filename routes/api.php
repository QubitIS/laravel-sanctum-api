<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});
Route::middleware('auth:sanctum')->group(function () {
    //Demo Route

  Route::resource('products', ProductController::class);

    //Route::get('products', [ProductController::class, 'index']);
    //Route::get('products/{id}', [ProductController::class, 'show']);
    //Route::post('products',[ProductController::class, 'store']);

    //Route::put('products/{id}', [ProductController::class, 'update']);
    //Route::delete('products/{id}', [ProductController::class, 'destroy']);


    
});