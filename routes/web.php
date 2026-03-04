<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MercedesController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('portfolio');
})->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/mercedes', [MercedesController::class, 'index'])
    ->name('work');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');