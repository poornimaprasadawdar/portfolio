<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductDetailsController;


use App\Models\Product;

Route::get('/', function () {

    $products = Product::latest()->take(6)->get();

    return view('mercedes.home', compact('products'));

})->name('home');



Route::get('/mercedes/product/{id}', [ProductDetailsController::class, 'show'])
    ->name('mercedes.product-details');



Route::get('/warranty', function () {
    return view('mercedes.warranty');
})->name('warranty');




Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

   
    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

   
    Route::post('/add', [AdminController::class, 'store'])
        ->name('admin.user.store');

    Route::post('/update', [AdminController::class, 'update'])
        ->name('admin.user.update');

    Route::get('/delete/{id}', [AdminController::class, 'delete'])
        ->name('admin.user.delete');


  

    Route::get('/products', [ProductController::class, 'index'])
        ->name('admin.products');

    Route::post('/products/store', [ProductController::class, 'store'])
        ->name('admin.products.store');

    Route::post('/products/update', [ProductController::class, 'update'])
        ->name('admin.products.update');

    Route::get('/products/delete/{id}', [ProductController::class, 'delete'])
        ->name('admin.products.delete');

Route::get('/products/edit/{id}', [ProductController::class, 'edit'])
    ->name('admin.products.edit');
  

    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('admin.categories');

    Route::post('/categories/store', [CategoryController::class, 'store'])
        ->name('admin.categories.store');

    Route::post('/categories/update', [CategoryController::class, 'update'])
        ->name('admin.categories.update');

    Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])
        ->name('admin.categories.delete');

    Route::get('/categories/toggle-status/{id}', [CategoryController::class, 'toggleStatus'])
        ->name('admin.categories.toggleStatus');

});
//  Route::get('/mercedes', [MercedesController::class, 'index'])
//      ->name('work');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

//  Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

