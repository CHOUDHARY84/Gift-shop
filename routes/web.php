<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
});


Route::get('about', function () {
    return view('About');
});

Route::get('blog-details', function () {
    return view('Blog-details');
});

Route::get('blog', function () {
    return view('Blog');
});

Route::get('cart', function () {
    return view('Cart');
});

Route::get('checkout', function () {
    return view('Checkout');
});

Route::get('contact', function () {
    return view('Contact');
});

Route::get('product-details', function () {
    return view('Product-details');
});

Route::get('shop', function () {
    return view('Shop');
});

Route::get('under-construction', function () {
    return view('Under-construction');
});

Route::get('wishlist', function () {
    return view('Wishlist');
});
