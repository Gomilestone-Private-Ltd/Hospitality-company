<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\AppController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\GuestRoomController;
use App\Http\Controllers\Web\WebProductController;
use App\Http\Controllers\web\UserLoginController;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SuperSubCategoryController;
use App\Http\Controllers\Admin\VarientController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\GetInTouchController;
use App\Http\Controllers\Admin\WorkWithUsController;

use App\Http\Controllers\Admin\AreaOfUseController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\IdealForController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\OrderController;


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
Route::post('/get-in-touch',[AppController::class,'GetInTouch'])->name('get.in.touch');
Route::post('/contact-us',[AppController::class,'contactUs'])->name('contact.us');
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/login',[ContactController::class,'login']);
Route::get('/account-settings',[ContactController::class,'account']);





/**
 *************************************Product route***************************
 */
Route::get('/category/{name}/{slug}',[WebProductController::class,'subcategoryProducts']);
Route::get('/sub-category/{name}/{slug}',[WebProductController::class,'supsubCategoryProducts']);
Route::get('/product/{name}/{slug}',[WebProductController::class,'productDetails']);
Route::get('/category/{name}/{slug}/{sort}',[WebProductController::class,'subcategoryProducts']);
Route::post('/filter-product',[WebProductController::class,'filterProduct']);

/**
 *************************************Work with us***************************
 */
Route::post('/work-with-us',[AppController::class,'WorkWithUs'])->name('work.with.us');


Route::get('/guest-room',[GuestRoomController::class,'guestRoomItems']);
Route::get('/desk-accessorie',[GuestRoomController::class,'deskAccessories']);
Route::get('/desk-accessorie-detail',[GuestRoomController::class,'deskAccessorieDetails']);


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


Route::group(['middleware'=>'admin','prefix'=>'admin'],function(){

    Route::get('/dashboard',[LoginController::class,'dashboard'])->name('dashboard');

    Route::get('/products',[ProductController::class,'index'])->name('products');
    Route::get('/add-product',[ProductController::class,'create'])->name('add.product');
    Route::post('/add-product',[ProductController::class,'store'])->name('add.product');
    Route::get('/edit-product/{slug}',[ProductController::class,'edit'])->name('edit.product');
    Route::post('/update-product/{slug}',[ProductController::class,'update'])->name('update.product');
    Route::post('/product-status',[ProductController::class,'status'])->name('product.status');

    //Delete product image 
    Route::post('/delete-product-image',[ProductController::class,'deleteProductImage'])->name('delete.product.image');
    
    //Delete product varient image 
    Route::post('/delete-product-varient-image',[ProductController::class,'deleteProductVarientImage'])->name('delete.product.varient.image');
    
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
    
    /******************************************Get In Touch Routes************************************/
    Route::get('/get-in-touch',[GetInTouchController::class,'index'])->name('get.in.touch');
    Route::get('/view-get-in-touch/{slug}',[GetInTouchController::class,'view'])->name('view.get.in.touch');
    Route::get('/edit-get-in-touch',[GetInTouchController::class,'edit'])->name('edit-get-in-touch');
    Route::post('/update-get-in-touch',[GetInTouchController::class,'update'])->name('update-get-in-touch');
    Route::post('/delete-get-in-touch',[GetInTouchController::class,'delete'])->name('delete.get.in.touch');
    
    /******************************************Work With Us Routes************************************/
    Route::get('/work-with-us',[WorkWithUsController::class,'index'])->name('work.with.us');
    Route::get('/view-work-with-us/{slug}',[WorkWithUsController::class,'view'])->name('view.work.with.us');
    Route::post('/delete-work-with-us',[WorkWithUsController::class,'delete'])->name('delete.work.with.us');

    /********************************************Area Of use  Routes***************************************/
    Route::get('/area-of-use',[AreaOfUseController::class,'index'])->name('area.of.use');
    Route::get('/add-area-of-use',[AreaOfUseController::class,'create'])->name('add.area.of.use');
    Route::post('/store-area-of-use',[AreaOfUseController::class,'store'])->name('store.area.of.use');
    Route::get('/edit-area-of-use/{slug}',[AreaOfUseController::class,'edit'])->name('edit.area.of.use');
    Route::post('/update-area-of-use/{slug}',[AreaOfUseController::class,'update'])->name('update.area.of.use');
    Route::post('/delete-area-of-use',[AreaOfUseController::class,'delete'])->name('delete.area.of.use');
    Route::post('/area-of-use-status',[AreaOfUseController::class,'status'])->name('area.of.use.status');

    /********************************************Color Routes***************************************/
    Route::get('/color',[ColorController::class,'index'])->name('color');
    Route::get('/add-color',[ColorController::class,'create'])->name('add.color');
    Route::post('/store-color',[ColorController::class,'store'])->name('store.color');
    Route::get('/edit-color/{slug}',[ColorController::class,'edit'])->name('edit.color');
    Route::post('/update-color/{slug}',[ColorController::class,'update'])->name('update.color');
    Route::post('/delete-color',[ColorController::class,'delete'])->name('delete.color');
    Route::post('/color-status',[ColorController::class,'status'])->name('color.status');

    /********************************************IdealFor Routes***************************************/
    Route::get('/ideal-for',[IdealForController::class,'index'])->name('ideal.for');
    Route::get('/add-ideal-for',[IdealForController::class,'create'])->name('add.ideal.for');
    Route::post('/store-ideal-for',[IdealForController::class,'store'])->name('store.ideal.for');
    Route::get('/edit-ideal-for/{slug}',[IdealForController::class,'edit'])->name('edit.ideal.for');
    Route::post('/update-ideal-for/{slug}',[IdealForController::class,'update'])->name('update.ideal.for');
    Route::post('/delete-ideal-for',[IdealForController::class,'delete'])->name('delete.ideal.for');
    Route::post('/ideal-for-status',[IdealForController::class,'status'])->name('ideal.for.status');

    /********************************************Material Routes***************************************/
    Route::get('/material',[MaterialController::class,'index'])->name('material');
    Route::get('/add-material',[MaterialController::class,'create'])->name('add.material');
    Route::post('/store-material',[MaterialController::class,'store'])->name('store.material');
    Route::get('/edit-material/{slug}',[MaterialController::class,'edit'])->name('edit.material');
    Route::post('/update-material/{slug}',[MaterialController::class,'update'])->name('update.material');
    Route::post('/delete-material',[MaterialController::class,'delete'])->name('delete.material');
    Route::post('/material-status',[MaterialController::class,'status'])->name('material.status');

    /********************************************Size Routes***************************************/
    Route::get('/size',[SizeController::class,'index'])->name('size');
    Route::get('/add-size',[SizeController::class,'create'])->name('add.size');
    Route::post('/store-size',[SizeController::class,'store'])->name('store.size');
    Route::get('/edit-size/{slug}',[SizeController::class,'edit'])->name('edit.size');
    Route::post('/update-size/{slug}',[SizeController::class,'update'])->name('update.size');
    Route::post('/delete-size',[SizeController::class,'delete'])->name('delete.size');
    Route::post('/size-status',[SizeController::class,'status'])->name('size.status');

    /******************************************Order Routes*********************************** */
    Route::get('/orders',[OrderController::class,'index'])->name('orders');
    Route::get('/order-detail/{slug}',[OrderController::class,'orderDetail'])->name('order.detail');
    Route::get('/order-proforma-invoice/{slug}',[OrderController::class,'orderProformaInvoice'])->name('order.proforma.invoice');
    
    Route::get('/images',[OrderController::class,'images'])->name('images');
    Route::post('/images-post',[OrderController::class,'imagesPost'])->name('images.post');

    /******************************************Contact Us Routes*********************************** */
    Route::get('/contact-us',[ContactUsController::class,'index'])->name('contact.us');
    Route::get('/view-contact-us/{slug}',[ContactUsController::class,'view'])->name('view.contact.us');
    Route::post('/delete-contact-us',[ContactUsController::class,'delete'])->name('delete.contact.us');

    Route::get('/admin-logout',[LoginController::class,'logout'])->name('admin.logout');
});





