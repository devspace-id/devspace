@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <img class="card-img-top" src="{{ asset('/gambar/' . $artikel->gambar) }}" height="400px"
                    alt="Card image cap">
                <div class="card-body">
                    <h2>{{ $artikel->judul }}</h2>
                    <em>Ditulis Oleh: {{ $artikel->user->name }}</em>
                    <hr>
                    <p class="card-text">{{ $artikel->isi }}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="/artikel" class="btn btn-primary">Kembali</a>
@endsection
