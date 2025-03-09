<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('test',function(){
    return view('backend.pages.auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('user-logout',[UserController::class,'logout'])->name('user-logout');

    //all roles routes
    Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
    Route::get('/roles/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('/roles',[RoleController::class,'store'])->name('roles.store');
    Route::get('/roles/{id}/edit',[RoleController::class,'edit'])->name('roles.edit');
    Route::put('/roles/{id}',[RoleController::class,'update'])->name('roles.update');
    Route::delete('/roles/{id}',[RoleController::class,'destroy'])->name('roles.destroy');

    //user all routes
    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::get('/users/create',[UserController::class,'create'])->name('users.create');
    Route::post('/users',[UserController::class,'store'])->name('users.store');
    Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
    Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');
    Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');

    //Product all routes
    Route::get('/products',[ProductController::class,'index'])->name('products.index');
    Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/products',[ProductController::class,'store'])->name('products.store');
});
