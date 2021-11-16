<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('store')->group(function () {
        Route::get('categories', [CategoryController::class, 'index'])->name('categories');
        Route::get('category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
        Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('category/update/{category}', [CategoryController::class, 'test'])->name('category.update');
    });

    Route::prefix('settings')->group(function () {
        Route::get('logs', [LogController::class, 'index'])->name('logs');
    });
});
