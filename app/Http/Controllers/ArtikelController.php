<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::where('users_id', auth()->user()->id)->paginate(10);
        return view('client.user.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.user.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);

        try {
            DB::beginTransaction();

            Artikel::create([
                'title' => $request->judul,
                'description' => $request->isi,
                'users_id' => auth()->user()->id,
            ]);

            DB::commit();

            return redirect()->route('artikel.index');
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
        $artikel = Artikel::find($id);
        return view('client.user.artikel.edit', compact('artikel'));
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
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);

        try {
            DB::beginTransaction();
            $artikel = Artikel::find($id);
            $artikel->update([
                'title' => $request->judul,
                'description' => $request->isi
            ]);
            DB::commit();

            return redirect()->route('artikel.index');
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
            Artikel::find($id)->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
