<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductCartController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

//Admin logout 

route::get('/logout',[AdminController::class, 'AdminLogout'])->name('user.logout');


Route::prefix('admin')->group(function(){

    Route::get('/user/profile',[AdminController::class, 'UserProfile'])->name('user.profile');

    Route::post('/user/profile/store',[AdminController::class, 'UserProfileStore'])->name('user.profile.store');

    Route::get('/user/change/password',[AdminController::class, 'ChangePassword'])->name('change.password');

    Route::post('/user/update/password',[AdminController::class, 'UpdatePassword'])->name('update.password');

 
    
    });

    Route::prefix('category')->group(function(){

        Route::get('/all',[CategoryController::class, 'AllCategory'])->name('all.categories');
        Route::get('/add',[CategoryController::class, 'AddCategory'])->name('add.category');

        Route::post('/store',[CategoryController::class, 'StoreCategory'])->name('category.store');

        Route::get('/edit/{id}',[CategoryController::class, 'EditCategory'])->name('category.edit');

        Route::post('/update/{id}',[CategoryController::class, 'updateCategory'])->name('category.update');
      
        Route::get('/delete/{id}',[CategoryController::class, 'DeleteCategory'])->name('category.delete');
        
    

    });



    Route::prefix('subcategory')->group(function(){

        Route::get('/all',[SubCategoryController::class, 'AllSubCategory'])->name('all.subcategories');
        Route::get('/add',[SubCategoryController::class, 'AddSubCategory'])->name('add.subcategory');

        Route::post('/store',[SubCategoryController::class, 'StoreSubCategory'])->name('subcategory.store');

        Route::get('/edit/{id}',[SubCategoryController::class, 'EditSubCategory'])->name('subcategory.edit');

        Route::post('/update/{id}',[SubCategoryController::class, 'updateSubCategory'])->name('subcategory.update');
      
        Route::get('/delete/{id}',[SubCategoryController::class, 'DeleteSubCategory'])->name('subcategory.delete');
        
    
        Route::get('/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);

    });


    Route::prefix('products')->group(function(){

        Route::get('/all',[ProductListController::class, 'AllProductList'])->name('all.products');
        Route::get('/add',[ProductListController::class, 'ADDProductList'])->name( 'add.product');

        Route::post('/store',[ProductListController::class, 'StoreProduct'])->name( 'product.store');

        Route::get('/delete/{id}',[ProductListController::class, 'DeleteProduct'])->name('product.delete');

        Route::get('/edit/{id}',[ProductListController::class, 'EditProduct'])->name('product.edit');


        Route::post('/update/{id}',[ProductListController::class, 'updateProduct'])->name( 'product.update');
      

    });



    Route::prefix('order')->group(function(){

        Route::get('/pending',[ProductCartController::class, 'PendingOrder'])->name('pending.order');
        Route::get('/proccessing',[ProductCartController::class, 'ProcessingOrder'])->name('processing.order');
        Route::get('/complete',[ProductCartController::class, 'CompleteOrder'])->name('complete.order');

        Route::get('/details/{id}', [ProductCartController::class, 'OrderDetails'])->name('order.details');

        Route::get('/status/processing/{id}', [ProductCartController::class, 'PendingToProcessing'])->name('pending.processing');

        Route::get('/status/complete/{id}', [ProductCartController::class, 'ProcessingToComplete'])->name('processing.complete');

        Route::get('/delete/{id}', [ProductCartController::class, 'OrderDelete'])->name('order.delete');

    });






    