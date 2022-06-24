<?php

namespace App\Http\Controllers;

use App\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->back();
    }
}
