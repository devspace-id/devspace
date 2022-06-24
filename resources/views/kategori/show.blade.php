@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2>{{ $kategori->nama_kategori }}</h2>
                    <p>Nanti akan diisi dengan artikel yang memiliki kategori ini</p>
                </div>
            </div>
        </div>
    </div>
    <a href="/kategori" class="btn btn-primary">Kembali</a>
@endsection
