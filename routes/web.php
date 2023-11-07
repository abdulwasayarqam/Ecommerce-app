<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix'=>'category'],function(){
    Route::get('create',[\App\Http\Controllers\Admin\CategoryController::class,'create_category'])->name('create.category');
    Route::post('store',[\App\Http\Controllers\Admin\CategoryController::class,'store_category'])->name('store.category');
    Route::get('list', [\App\Http\Controllers\Admin\CategoryController::class, 'list_categories'])->name('list.categories');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit_category'])->name('edit.category');
    Route::post('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update_category'])->name('update.category');
    Route::delete('delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete_category'])->name('delete.category');


});
