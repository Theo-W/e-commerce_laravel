<?php

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
    });

});

Auth::routes();
