@extends('layout.master')

@section('content')
    <div class="row">
        @forelse ($kategori as $item)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $item->nama_kategori }}</h2>
                        <a href="/kategori/{{ $item->id }}" class="btn btn-primary">Lihat</a>
                        <a href="/kategori/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/kategori/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm m-1">
                        </form>
                    </div>
                </div>
            </div>
        @empty
            Tidak ada data
        @endforelse
    </div>
@endsection
