<?php

use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminStatusController;
use App\Http\Controllers\Admin\AdminCategoryController;
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
            Route::get('/', [AdminCategoryController::class, 'index'])->name('index');
            Route::get('/create', [AdminCategoryController::class, 'create'])->name('create');
            Route::post('/create/store', [AdminCategoryController::class, 'store'])->name('create.store');
            Route::get('/edit/{id}', [AdminCategoryController::class, 'edit'])->name('edit');
            Route::post('/create/{id}', [AdminCategoryController::class, 'update'])->name('edit.update');
            Route::delete('/delete/{id}', [AdminCategoryController::class, 'delete'])->name('delete');
        });

        Route::prefix('/status')->name('status.')->group(function () {
            Route::get('/', [AdminStatusController::class, 'index'])->name('index');
            Route::get('/create', [AdminStatusController::class, 'create'])->name('create');
            Route::post('/create/store', [AdminStatusController::class, 'store'])->name('create.store');
            Route::get('/edit/{id}', [AdminStatusController::class, 'edit'])->name('edit');
            Route::post('/edit/{id}', [AdminStatusController::class, 'update'])->name('edit.update');
            Route::delete('/delete/{id}', [AdminStatusController::class, 'delete'])->name('delete');
        });

        Route::prefix('/article')->name('article.')->group(function () {
            Route::get('/', [AdminArticleController::class, 'index'])->name('index');
            Route::get('/create', [AdminArticleController::class, 'create'])->name('create');
            Route::get('/edit/{id}', [AdminArticleController::class, 'edit'])->name('edit');
            Route::delete('/delete/{id}', [AdminArticleController::class, 'delete'])->name('delete');
        });
    });

});

Auth::routes();
