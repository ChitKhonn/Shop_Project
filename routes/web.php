<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('auth/login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('category', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

     //Category Route Section
     Route::controller(CategoryController::class)->prefix('category')->group(function () {
        Route::get('', 'index')->name('category');
        Route::get('create', 'create')->name('category.create');
        Route::post('store', 'store')->name('category.store');
        Route::get('show/{id}', 'show')->name('category.show');
        Route::get('edit/{id}', 'edit')->name('category.edit');
        Route::put('edit/{id}', 'update')->name('category.update');
        Route::delete('destroy/{id}', 'destroy')->name('category.destroy');
    });




    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

