<?php

namespace App\Http\Controllers;

use App\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JawabanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required',
        ]);

        $idUser = Auth::id();

        Jawaban::create([
            'pertanyaan_id' => $request->pertanyaan_id,
            'users_id' => $idUser,
            'isi' => $request->isi,
        ]);

        Alert::success('Berhasil', 'Jawabanmu berhasil ditambahkan');
        return redirect()->back();
    }
}
