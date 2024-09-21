<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Middleware\RequestControl;
use App\Http\Middleware\RequestValidation;

Route::get('/', function () {
    return view('welcome');
});

// Users Controller ROutes Starts Here

Route::get('homepage', [Users::class, 'index'])->name('homepage');

Route::post('login', [Users::class, 'login'])->middleware(RequestControl::class, RequestValidation::class)->name('loginpage');

// Users Controller ROutes Ends Here
