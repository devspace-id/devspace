@extends('pages.category')

@section('kategori')
    <div class="row row row-cols-1 row-cols-md-3 g-4 mt-5">
        <div class="col-4 card-group">
            <div class="card">
                <div class="card-body">
                    <h2>{{ $kategori->nama_kategori }}</h2>
                    <hr>
                    @forelse ($kategori->pertanyaan as $item)
                        <div class="row">
                            <img class="card-img-top" src="{{ asset('/gambar/' . $item->gambar) }}" height="400px"
                                alt="Card image cap">
                            <div class="card-body">
                                <h2>{{ $item->judul }}</h2>
                                <p class="card-text">{{ Str::limit($item->isi, 100) }}</p>
                                <a href="/pertanyaan/{{ $item->id }}"
                                    class="btn btn-primary text-decoration-none">Lihat</a>
                            </div>
                        </div>
                    @empty
                        <h4>Tidak ada Pertanyaan</h4>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <a href="/kategori" class="btn btn-primary text-decoration-none">Kembali</a>
@endsection
