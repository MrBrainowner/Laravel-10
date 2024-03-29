<?php

use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Pages\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/products', 'products')->name('products');
});

Route::controller(AccountController::class)->group(function(){
    //sign in route
    Route::get('/login', 'ShowLogInForm')->name('login');
    Route::post('/login', 'login')->name('login.submit');
    //sign up route
    Route::get('/register', 'ShowRegisterForm')->name('register');
    Route::post('/register', 'register')->name('register.submit');
});

Route::controller(ProfileController::class)->group(function() {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/logout', 'logout')->name('logout');
});

// Route::controller(ProfileController::class)->group(function(){
//     Route::get('/profile', 'profile')->name('profile');
// });
