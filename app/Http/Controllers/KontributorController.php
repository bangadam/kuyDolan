<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Places;
use Illuminate\Http\Request;

class KontributorController extends Controller
{
    public function index() {
        $artikel = Artikel::where('users_id', auth()->user()->id)->count('id');
        $wisata = Places::where('users_id', auth()->user()->id)->count('id');

        return view('client.user.index', compact('artikel', 'wisata'));
    }

    public function logout() {
        session()->flush();
        return redirect()->route('home');
    }
}
