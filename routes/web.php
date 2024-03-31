<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/auth/redirect/{provider}', function (string $provider) {
    return Socialite::driver($provider)->redirect();
});

Route::get('/callback/{provider}', function (string $provider) {
    $user = Socialite::driver($provider)->stateless()->user();

    dd($user);
});

