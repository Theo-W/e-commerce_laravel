<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware('auth')->group(function () {

    Route::middleware('admin')->prefix('/admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'home'])->name('home');

        Route::prefix('/category')->name('category.')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::post('/create/store', [CategoryController::class, 'store'])->name('create.store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('/create/{id}', [CategoryController::class, 'update'])->name('edit.update');
            Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        });
    });

});

Auth::routes();
