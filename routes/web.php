<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/tech', function () {
    return view('pages.tech');
});
Route::get('/health', function () {
    return view('pages.health');
});
Route::get('/beauty', function () {
    return view('pages.beauty');
});


Route::get('/admin', [PostController::class, 'create'])->name('posts.create');
Route::post('/admin', [PostController::class, 'store'])->name('posts.store');


Route::get('/view', [PostController::class, 'view']);