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
Route::group(['prefix' => 'p', 'middleware' => 'auth'], function () {
    Route::get('/new', [ProjectController::class, 'create'])->name('project.new');
    Route::post('/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/index', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/{id}', [ProjectController::class, 'show'])->name('project.show');
});


// auth
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/redirect/{provider}', [LoginController::class, 'redirect'])->name('provider-login');
    Route::get('/callback/{provider}', [LoginController::class, 'callback']);
});

