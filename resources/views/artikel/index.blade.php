@extends('layout.master')

@section('content')
    <div class="row">
        @forelse ($artikel as $item)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/gambar/' . $item->gambar) }}" height="400px"
                        alt="Card image cap">
                    <div class="card-body">
                        <h2>{{ $item->judul }}</h2>
                        <p class="card-text">{{ Str::limit($item->isi, 30) }}</p>
                        @auth
                            <a href="/artikel/{{ $item->id }}" class="btn btn-primary">Lihat</a>
                            <a href="/artikel/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/artikel/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm m-1">
                            </form>
                        @endauth
                        @guest
                            <a href="/artikel/{{ $item->id }}" class="btn btn-primary">Lihat</a>
                        @endguest
                    </div>
                </div>
            </div>
        @empty
            Tidak ada data
        @endforelse
    </div>
@endsection
