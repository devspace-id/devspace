@extends('layout.master')

@section('content')
    @auth
        <a href="/pertanyaan" class="btn btn-primary">Kembali</a>
        <a href="/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-primary">Edit</a>
        <form action="/pertanyaan/{{ $pertanyaan->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" class="btn btn-danger btn-sm m-1">
        </form>
    @endauth
    @guest
        <a href="/pertanyaan" class="btn btn-primary">Kembali</a>
    @endguest
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

    {{-- tempat memberi jawaban pertanyaan --}}
    <hr>
    <form action="/jawaban" method="POST">
        @csrf
        <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
        <div class="card-body">
            <div class="form-group">
                <textarea name="isi" class="form-control" placeholder="Masukkan komentar"></textarea>
                @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Komentari</button>
        </div>
    </form>

    <hr>

    @forelse ($pertanyaan->jawaban as $item)
        <div class="card">
            <div class="card-header text-bold">
                {{ $item->user->name }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ $item->isi }}</p>
            </div>
        </div>
    @empty
        <h4>Tidak ada jawaban</h4>
    @endforelse
@endsection