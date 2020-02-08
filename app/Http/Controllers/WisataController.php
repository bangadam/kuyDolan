<?php

namespace App\Http\Controllers;

use App\Category as CategoryAlias;
use App\GalleryPlaces;
use App\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Places::with('category')->where('users_id', auth()->user()->id)->paginate(10);
        return view('client.user.wisata.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryAlias::get()->toArray();
        return view('client.user.wisata.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $file = null;
            if ($request->hasFile('file_wisata')) {
                $fileRequest = $request->file('file_wisata');
                $file = str_random(5) .".". $fileRequest->getClientOriginalExtension();

                $fileRequest->move('wisata/', $file);
            }

            $places = Places::create([
                "name" => $request->nama_wisata,
                'location_city' => $request->kota_wisata,
                'lat' => $request->lat_wisata,
                'long' => $request->long_wisata,
                'description' => $request->deskripsi_wisata,
                'contact_number' => $request->contact_wisata,
                'website' => $request->url_website,
                'category_id' => $request->kategori_wisata,
                'users_id' => auth()->user()->id
            ]);

            GalleryPlaces::create([
                'places_id' => $places->id,
                'path' => $file,
            ]);

            DB::commit();

            return redirect()->route('wisata.index');
        } catch (\Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryAlias::get()->toArray();
        $places = Places::find($id);
        return view('client.user.wisata.edit', compact('places', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $places = Places::with('gallery')->find($id);

            $file = $places->gallery->path;

            if ($request->hasFile('file_wisata')) {
                $fileRequest = $request->file('file_wisata');
                $file = str_random(5) .".". $fileRequest->getClientOriginalExtension();

                $fileRequest->move('wisata/', $file);

                File::delete('wisata'.$places->path);
            }

            $places->update([
                "name" => $request->nama_wisata,
                'location_city' => $request->kota_wisata,
                'lat' => $request->lat_wisata,
                'long' => $request->long_wisata,
                'description' => $request->deskripsi_wisata,
                'contact_number' => $request->contact_wisata,
                'website' => $request->url_website,
                'category_id' => $request->kategori_wisata,
            ]);

            $gallery = GalleryPlaces::where('places_id', $places->id)->first();

            if ($gallery != null) {
                $gallery->path = $file;
                $gallery->save();
            }

            DB::commit();
            return redirect()->route('wisata.index');
        } catch (\Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $places = Places::with('gallery')->find($id);

            File::delete('wisata/'.$places->gallery->path);

            $places->gallery()->delete();
            $places->delete();


            DB::commit();

            return redirect()->back();
        } catch (\Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
}
