<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Backend\AdminPagesController;
use App\Http\Controllers\Backend\AdminProductsController;
use App\Http\Controllers\Backend\CategoriesController;


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

Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');

//Product Routes for our frontend Part

Route::get('/product',[ProductsController::class,'index'])->name('product');
Route::get('/product/{slug}',[ProductsController::class,'show'])->name('product.show');
Route::get('/search',[PagesController::class,'search'])->name('search');

//Admin Pages Routes

Route::group(['prefix'=>'admin'],function(){

    Route::get('/',[AdminPagesController::class,'index'])->name('admin.index');

    //Admin Product Routes

    Route::group(['prefix'=>'/products'],function(){

        Route::get('/',[AdminProductsController::class,'index'])->name('admin.products');  
        Route::get('/create',[AdminProductsController::class,'create'])->name('admin.product.create');  
        Route::get('/edit/{id}',[AdminProductsController::class,'edit'])->name('admin.product.edit');  
    
        Route::post('/store',[AdminProductsController::class,'store'])->name('admin.product.store');
        Route::post('/edit/{id}',[AdminProductsController::class,'update'])->name('admin.product.update');
        Route::post('/delete/{id}',[AdminProductsController::class,'delete'])->name('admin.product.delete');
    });

    //Admin Category Routes

    Route::group(['prefix'=>'/categories'],function(){

        Route::get('/',[CategoriesController::class,'index'])->name('admin.categories');  
        Route::get('/create',[CategoriesController::class,'create'])->name('admin.category.create');  
        Route::get('/edit/{id}',[CategoriesController::class,'edit'])->name('admin.category.edit');  
    
        Route::post('/store',[CategoriesController::class,'store'])->name('admin.category.store');
        Route::post('/category/edit/{id}',[CategoriesController::class,'update'])->name('admin.category.update');
        Route::post('/category/delete/{id}',[CategoriesController::class,'delete'])->name('admin.category.delete');
    });


});

