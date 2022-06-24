@extends('layout.master')

@section('content')
    <h1 class="text-center">List Pertanyaan</h1>
    <div class="row">
        @forelse ($pertanyaan as $item)
            <div class="col-4">
                <div class="card">
                    {{-- <img class="card-img-top" src="{{ asset('/gambar/' . $item->gambar) }}" height="400px"
                        alt="Card image cap"> --}}
                    <div class="card-body">
                        <h2>{{ $item->judul }}</h2>
                        <p class="card-text">{{ Str::limit($item->isi, 100) }}</p>
                        <a href="/pertanyaan/{{ $item->id }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        @empty
            Tidak ada data
        @endforelse
    </div>
@endsection
