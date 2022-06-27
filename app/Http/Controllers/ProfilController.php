<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    public function index()
    {
        $idUser = Auth::id();

        $profil = Profil::where('users_id', $idUser)->first();

        return view('profil.index', ['profil' => $profil]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'biodata' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required',
        ]);

        Profil::where('id', $id)->update([
            'biodata' => $request->biodata,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        Alert::info('Berhasil', 'Profil berhasil diubah');
        return redirect("/");
    }
}
