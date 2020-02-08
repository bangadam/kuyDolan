<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Places;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $places = Places::with('gallery', 'category')->inRandomOrder()->take(5)->get();
        $wisata = Places::count('id');
        $kontributor = User::count('id');
        $artikel = Artikel::with('user')->inRandomOrder()->take(4)->get();

        return view('client.index', compact('places', 'wisata', 'kontributor', 'artikel'));
    }

    public function searchPlaces(Request $request) {
        $places = Places::with('gallery', 'category')->where('name', 'like', '%'. $request->search . '%')->get();
        return view('client.places', compact('places'));
    }

    public function detail($id) {
        $places = Places::with('user', 'gallery', 'category')->find($id);
        $otherPlaces = Places::inRandomOrder()->limit(3)->get();
        return view('client.detail-places', compact('places', 'otherPlaces'));
    }

}
