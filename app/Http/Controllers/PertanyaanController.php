<?php

namespace App\Http\Controllers;

use App\User;
use App\Pertanyaan;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan.index', ['pertanyaan' => $pertanyaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $kategori = Kategori::all();
        return view('pertanyaan.create', compact('users', 'kategori'));
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
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'kategori_id' => 'required',
        ]);

        $idUser = Auth::id();

        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('gambar'), $namaGambar);

        Pertanyaan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $namaGambar,
            'kategori_id' => $request->kategori_id,
            'users_id' => $idUser,
        ]);

        return redirect("/pertanyaan")->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.show', ['pertanyaan' => $pertanyaan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $kategori = Kategori::all();
        return view('pertanyaan.edit', ['pertanyaan' => $pertanyaan, 'kategori' => $kategori]);
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
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'kategori_id' => 'required',
        ]);

        $idUser = Auth::id();
        $pertanyaan = Pertanyaan::find($id);

        if ($request->has('gambar')) {
            $path = "gambar/";
            File::delete($path . $pertanyaan->gambar);
            $namaGambar = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('gambar'), $namaGambar);

            Pertanyaan::where('id', $id)->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $namaGambar,
                'kategori_id' => $request->kategori_id,
                'users_id' => $idUser,
            ]);
        } else {
            Pertanyaan::where('id', $id)->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'kategori_id' => $request->kategori_id,
                'users_id' => $idUser,
            ]);
        }

        return redirect("/pertanyaan")->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $path = "gambar/";
        File::delete($path . $pertanyaan->gambar);
        Pertanyaan::destroy($id);
        return redirect("/pertanyaan")->with('success', 'Data berhasil dihapus');
    }
}
