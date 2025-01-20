<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Category Route
Route::get('/category', function () {
    return view('category');
})->name('category');

// Detail Route
Route::get('/details', function () {
    return view('details');
})->name('details');

// Display Route
Route::get('/display', function () {
    return view('display');
})->name('display');

// About Route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Wishlist Route
Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

// Cart Route
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// User Profile Route
Route::get('/userprofile', function () {
    return view('userprofile');
})->name('userprofile');

// Sign In Route
Route::get('/signin', function () {
    return view('signin');
})->name('signin');

// Sign Up Customer Route
Route::get('/signupcustomer', function () {
    return view('signupcustomer');
})->name('signupcustomer');

// Sign Up Admin Route
Route::get('/signupadmin', function () {
    return view('signupadmin');
})->name('signupadmin');

// Checkout Route
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// use App\Http\Controllers\BooksController;

Route::get('/books', function () {
    return view('books.index');
});
