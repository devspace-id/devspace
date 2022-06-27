@extends('pages.category')

@section('kategori')
    <div class="row mt-5">
        @forelse ($kategori as $item)
            <div class="col-4">
                <div class="card">
                    <h2 class="card-header mb-1">{{ $item->nama_kategori }}</h2>
                    <div class="card-body">
                        <a href="/kategori/{{ $item->id }}" class="btn btn-primary text-decoration-none">Lihat</a>
                        <a href="/kategori/{{ $item->id }}/edit" class="btn btn-primary text-decoration-none">Edit</a>
                        <form action="/kategori/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger text-decoration-none mt-2">
                        </form>
                    </div>
                </div>
            </div>
        @empty
            Belum ada Kategori
        @endforelse
    </div>
@endsection
