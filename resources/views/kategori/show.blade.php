@extends('pages.category')

@section('kategori')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2>{{ $kategori->nama_kategori }}</h2>
                    <hr>
                    @forelse ($kategori->pertanyaan as $item)
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('/gambar/' . $item->gambar) }}" height="400px"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h2>{{ $item->judul }}</h2>
                                        <p class="card-text">{{ Str::limit($item->isi, 100) }}</p>
                                        <a href="/pertanyaan/{{ $item->id }}" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4>Tidak ada Pertanyaan</h4>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <a href="/kategori" class="btn btn-primary">Kembali</a>
@endsection
