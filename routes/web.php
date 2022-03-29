<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\AdminController;
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

        Route::post('/store',[CategoryController::class, 'StoreCategory'])->name('category.store');

        Route::get('/edit/{id}',[CategoryController::class, 'EditCategory'])->name('category.edit');

        Route::post('/update/{id}',[CategoryController::class, 'updateCategory'])->name('category.update');
      
        Route::get('/delete/{id}',[CategoryController::class, 'DeleteCategory'])->name('category.delete');
        
    

    });



    