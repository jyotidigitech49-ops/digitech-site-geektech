<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductPrinterController;

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
Route::get('/blog/details/{url}', [BlogController::class, 'index']);


// products Printer page route
Route::get('/products/printer', [ProductPrinterController::class, 'productsPrinter']);
Route::get('/products/printer/{url}', [ProductPrinterController::class, 'printerCategoryProducts']);
Route::get('/products/printer/details/{url}', [ProductPrinterController::class, 'printerCategoryProductsDetails']);

Route::get('/products-enquiry', function () {
    return view('products.product_enquiry');
});


// products desktop page route
