<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomerController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\SigninController;

// Home Route
Route::get('/', function () {
    return redirect()->route('signin');
})->name('home');

// Sign In Routes
Route::get('/signin', function () {
    return view('signin');
})->name('signin');
// Route::post('/signin', function () {
//     return view('welcome');
// })->name('signin.post');

Route::post('/signin', function () {
    return view('admin.dashboard'); // This should load resources/views/admin/dashboard.blade.php
})->name('signin.post');


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

// Sign Up Customer Routes
Route::get('/signupcustomer', function () {
    return view('signupcustomer');
})->name('signupcustomer');

// Sign Up Admin Routes
Route::get('/signupadmin', function () {
    return view('signupadmin');
})->name('signupadmin');

// Logout Route
Route::post('/logout', [SigninController::class, 'logout'])->name('logout');

// Checkout Route
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Books Route
Route::get('/books', function () {
    return view('books.index');
});

// Admin Dashboard Route
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Add Product Route
Route::get('/admin/add', function () {
    return view('admin.add');
})->name('admin.add');

// Product Management Route
Route::get('/admin/product', function () {
    return view('admin.product');
})->name('admin.product');

// Orders Route
Route::get('/admin/order', function () {
    return view('admin.order');
})->name('admin.order');

// Update Product Route
Route::get('/admin/update', function () {
    return view('admin.update');
})->name('admin.update');

// Reports Route
Route::get('/admin/report', function () {
    return view('admin.report');
})->name('admin.report');