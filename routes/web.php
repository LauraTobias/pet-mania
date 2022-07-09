<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('index');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/user/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/user/data', function () {
    return view('users/user-data');
})->name('user.data');

Route::get('/user/register', function () {
    return view('users/user-register');
})->name('user.register');

Route::get('/product/register', function () {
    return view('products/product-register');
})->name('product.register');

Route::get('/schedule/register', function () {
    return view('schedules/schedule-register');
})->name('schedule.register');

Route::get('/product/index', function () {
    return view('products/product-index');
})->name('product.index');


Route::resource('products', ProductController::class);
Route::post('/product/register', [ProductController::class, 'store'])->name('product.register');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');

Route::post('/pet/register', [PetController::class, 'store'])->name('pet.register');
Route::post('/pet/delete/{id}', [PetController::class, 'destroy'])->name('pet.delete');
Route::post('/pet/edit/{id}', [PetController::class, 'edit'])->name('pet.edit');
Route::get('/pet/edit/{id}', [PetController::class, 'update'])->name('pet.update');
Route::get('/pet/control', [PetController::class, 'index'])->name('pet.control');
Route::get('/pet/register', function () { return view('pets/pet-register'); })->name('pet.register');
 
Route::post('/user/register', [RegisteredUserController::class, 'store'])->name('user.register');
Route::post('/user/edit', [UserController::class, 'edit'])->name('user.edit');

require __DIR__.'/auth.php';