<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', function () {
    return view('about.aboutus');
});

Route::get('/blog-details', function () {
    return view('blog.blogdetails');
});
