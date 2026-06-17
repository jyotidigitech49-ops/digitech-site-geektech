<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/about', function () {
    return view('about.aboutus');
});

Route::get('/blog-details', function () {
    return view('blog.blogdetails');
});
