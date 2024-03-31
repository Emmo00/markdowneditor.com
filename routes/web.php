<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

// landing
Route::get('/', function () {
    return view('welcome');
});

// editor / projects
Route::group(['prefix' => 'p'], function () {
    Route::get('/new', [ProjectController::class, 'new']);
    Route::get('/{id}', [ProjectController::class, 'show']);
});


// auth

Route::group(['prefix' => 'auth'], function () {
    Route::get('/redirect/{provider}', [LoginController::class, 'redirect']);
    Route::get('/callback/{provider}', [LoginController::class, 'callback']);
});

