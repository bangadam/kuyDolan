<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware("guest");
    }

    public function index()
    {
        return view('client.login');
    }

    public function redirect($provider) {
        return Socialite::with($provider)->redirect();
    }

    public function callback($provider) {
        $getInfo = Socialite::with($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->route('kontributor.index');
    }

    private function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name' => $getInfo->name,
                'email' => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id,
                'photo' => $getInfo->avatar,
            ]);
        }

        return $user;
    }
}
