<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SuperSubCategoryController;
use App\Http\Controllers\Admin\VarientController;
use App\Http\Controllers\Web\AppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * 
 *
 *********************************Web Application Route*********************************/

Route::get('/',[AppController::class,'index'])->name('/');
Route::get('/philosophy',[AppController::class,'philosophy']);
Route::post('/get-subcategory-list',[AppController::class,'getSubCategory'])->name('get.subcategory.list');


/**
 * 
 *********************************User Pannel Route*********************************/
Route::group(['middleware'=>'auth'],function(){

    Route::get('/dashboard1',[LoginController::class,'dashboard'])->name('dashboard');

   
});


/**
 * 
 *********************************Admin Pannel Route*********************************/
Route::get('/admin',[LoginController::class,'index'])->name('admin');
Route::post('/admin-login',[LoginController::class,'login'])->name('admin.login');


Route::group(['middleware'=>'admin'],function(){

    Route::get('/dashboard',[LoginController::class,'dashboard'])->name('dashboard');

    Route::get('/products',[ProductController::class,'index'])->name('products');
    Route::get('/product-datatable',[ProductController::class,'getProductDatatable'])->name('product.datatable');
    Route::get('/add-products',[ProductController::class,'create'])->name('add.products');
    Route::post('/add-products',[ProductController::class,'store'])->name('add.products');

    /******************************************Varient Type Routes*********************************** */
    Route::get('/add-varient-type',[VarientController::class,'create'])->name('add.varient.type');
    Route::post('/add-varient-type',[VarientController::class,'create'])->name('add.varient.type');
    
    Route::post('/add-varient-value',[VarientController::class,'addVarientValue'])->name('add.varient.value');
    Route::post('/get-varient-value',[VarientController::class,'getVarientValue'])->name('get.varient.value');

    /******************************************Category Routes*********************************** */
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::get('/category-datatable',[CategoryController::class,'getCategoryDatatable'])->name('category.datatable');
    Route::get('/add-category',[CategoryController::class,'create'])->name('add.category');
    Route::post('/add-category',[CategoryController::class,'store'])->name('add.category');
    Route::post('/delete-category',[CategoryController::class,'delete'])->name('delete.category');
    Route::get('/edit-category/{slug}',[CategoryController::class,'edit'])->name('edit.category');
    Route::post('/update-category/{slug}',[CategoryController::class,'update'])->name('update.category');
    Route::post('/category-status',[CategoryController::class,'status'])->name('category.status');
    
    /******************************************Sub-category Routes************************************/
    Route::get('/sub-category',[SubCategoryController::class,'index'])->name('subcategory');
    Route::get('/sub-category-datatable',[SubCategoryController::class,'getSubCategoryDatatable'])->name('sub.category.datatable');
    Route::get('/add-sub-category',[SubCategoryController::class,'create'])->name('add.subcategory');
    Route::post('/add-sub-category',[SubCategoryController::class,'store'])->name('add.sub.category');
    Route::post('/delete-sub-category',[SubCategoryController::class,'delete'])->name('delete.sub.category');
    Route::get('/edit-sub-category/{slug}',[SubCategoryController::class,'edit'])->name('edit.sub.category');
    Route::post('/update-sub-category/{slug}',[SubCategoryController::class,'update'])->name('update.sub.category');
    Route::post('/subcategory-status',[SubCategoryController::class,'status'])->name('subcategory.status');
    
    Route::post('/get-subcategory',[SubCategoryController::class,'getSubCategory'])->name('get.subcategory');

    /******************************************Super sub-category Routes************************************/
    Route::get('/supersubcategory',[SuperSubCategoryController::class,'index'])->name('supersubcategory');
    Route::get('/supersubcategory-datatable',[SuperSubCategoryController::class,'getSuperSubCategoryDatatable'])->name('supersubcategory.datatable');
    Route::get('/add-supersubcategory',[SuperSubCategoryController::class,'create'])->name('add.supersubcategory');
    Route::post('/add-supersubcategory',[SuperSubCategoryController::class,'store'])->name('add.supersubcategory');
    Route::post('/delete-supersubcategory',[SuperSubCategoryController::class,'delete'])->name('delete.supersubcategory');
    Route::get('/edit-supersubcategory/{slug}',[SuperSubCategoryController::class,'edit'])->name('edit.supersubcategory');
    Route::post('/update-supersubcategory/{slug}',[SuperSubCategoryController::class,'update'])->name('update.supersubcategory');
    Route::post('/supersubcategory-status',[SuperSubCategoryController::class,'status'])->name('supersubcategory.status');
    
    Route::post('/get-supersubcategory',[SuperSubCategoryController::class,'getSuperSubCategory'])->name('get-supersubcategory');

    /********************************************Setting Routes***************************************/
    Route::get('/setting',[SettingController::class,'index'])->name('setting');
    Route::post('/update-setting',[SettingController::class,'update'])->name('update.setting');
    
    Route::get('/profile',[LoginController::class,'edit'])->name('edit.profile');
    Route::post('/update-profile',[LoginController::class,'update'])->name('update.profile');

    Route::get('/admin-logout',[LoginController::class,'logout'])->name('admin.logout');
});

