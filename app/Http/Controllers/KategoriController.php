<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kategori = Kategori::all();
        return view('kategori.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('kategori.create', compact('kategori'));
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
            'nama_kategori' => 'required',
        ]);

        Kategori::create([
            'nama_kategori' => $request['nama_kategori'],
        ]);

        Alert::success('Berhasil', 'Kategori berhasil ditambahkan');
        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.show', ['kategori' => $kategori]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit', ['kategori' => $kategori]);
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
            'nama_kategori' => 'required',
        ]);

        Kategori::where('id', $id)->update([
            'nama_kategori' => $request['nama_kategori'],
        ]);

        Alert::success('Berhasil', 'Kategori berhasil diubah');
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::destroy($id);
        Alert::info('Berhasil', 'Kategori berhasil dihapus');
        return redirect('/kategori');
    }
}
