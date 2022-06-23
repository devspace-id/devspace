<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', ['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('artikel.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'isi' => 'required',
        ]);

        $idUser = Auth::id();

        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('gambar'), $namaGambar);

        Artikel::create([
            'judul' => $request->judul,
            'gambar' => $namaGambar,
            'isi' => $request->isi,
            'users_id' => $idUser,
        ]);

        return redirect("/artikel")->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::find($id);
        return view('artikel.show', ['artikel' => $artikel]);
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
        return view('artikel.edit', ['artikel' => $artikel]);
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
        $request->validate([
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'isi' => 'required',
        ]);

        $idUser = Auth::id();
        $artikel = Artikel::find($id);

        if ($request->has('gambar')) {
            $path = "gambar/";
            File::delete($path . $artikel->gambar);
            $namaGambar = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('gambar'), $namaGambar);

            Artikel::where('id', $id)->update([
                'judul' => $request->judul,
                'gambar' => $namaGambar,
                'isi' => $request->isi,
                'users_id' => $idUser,
            ]);
        } else {
            Artikel::where('id', $id)->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'users_id' => $idUser,
            ]);
        }

        return redirect("/artikel")->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $path = "gambar/";
        File::delete($path . $artikel->gambar);
        Artikel::destroy($id);
        return redirect("/artikel")->with('success', 'Data berhasil dihapus');
    }
}
