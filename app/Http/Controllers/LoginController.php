<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    protected array $providers = ['google'];

    public function redirect(string $provider)
    {
        if (!in_array($provider, $this->providers)) {
            return abort(404);
        }
        return Socialite::driver($provider)->redirect();
    }

    public function callback(string $provider)
    {
        if (!in_array($provider, $this->providers)) {
            return abort(404);
        }
        $user = Socialite::driver($provider)->user();

        $user_from_db = User::firstOrCreate(
            [
                "email" => $user->getEmail()
            ],
            [
                "name" => $user->getName(),
                "email" => $user->getEmail(),
                "avatar" => $user->getAvatar(),
                "password" => Hash::make(Str::random(23)),
            ]
        );

        Auth::login($user_from_db);
        return redirect('editor');
    }
}
