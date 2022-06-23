<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $idUser = Auth::id();

        $profile = Profil::where('users_id', $idUser);

        return view('profil.index', ['profile' => $profile]);
    }
}
