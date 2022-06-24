@extends('layout.master')

@section('content')
    <a href="/pertanyaan" class="btn btn-primary">Kembali</a>
    <a href="/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-primary">Edit</a>
    <form action="/pertanyaan/{{ $pertanyaan->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete" class="btn btn-danger btn-sm m-1">
    </form>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2>{{ $pertanyaan->judul }}</h2>
                    <em>Ditanyakan oleh: {{ $pertanyaan->user->name }}</em>
                    <br>
                    <em>Kategori: {{ $pertanyaan->kategori->nama_kategori }}</em>
                    <hr>
                    <p class="card-text">{{ $pertanyaan->isi }}</p>
                    <h4>Lampiran Gambar Error</h4>
                    <img class="card-img-top" src="{{ asset('/gambar/' . $pertanyaan->gambar) }}" height="400px"
                        alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
@endsection
