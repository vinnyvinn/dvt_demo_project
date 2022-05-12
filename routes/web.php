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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']],function (){
    Route::get('/about',[\App\Http\Controllers\AboutController::class,'aboutPage']);
    Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'profile']);
    Route::get('/products',[\App\Http\Controllers\ProductsController::class,'index']);
    Route::get('/show/{id}',[\App\Http\Controllers\ProductsController::class,'show']);
    Route::get('/show-form',[\App\Http\Controllers\ProductsController::class,'createProduct']);
    Route::post("/create-product",[\App\Http\Controllers\ProductsController::class,'insertProduct']);
    Route::get('/edit-product/{id}',[\App\Http\Controllers\ProductsController::class,'editProduct']);
    Route::put('/update-product/{id}',[\App\Http\Controllers\ProductsController::class,'updateProduct']);
    Route::delete("/delete-product/{id}",[\App\Http\Controllers\ProductsController::class,'deleteProduct']);

    Route::resource('product',\App\Http\Controllers\ProductController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
