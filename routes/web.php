<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductController;

Route::get('/welcome', function () {
    return view('welcome');
});

// home page route
Route::get('/', [HomeController::class, 'index']);


// about us page route
Route::get('/about-us', function () {
    return view('about.aboutus');
});

// contact us page route
Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::post('/contact-submit', [ContactUsController::class, 'store']);


// blog page route
Route::get('/blog-details', [BlogController::class, 'index']);


// products page route
Route::get('/products/printer', [ProductController::class, 'productsPrinter']);
Route::get('/products/{url}', [ProductController::class, 'printerCategoryProducts']);

Route::get('/products-details', function () {
    return view('products.product-details');
});
