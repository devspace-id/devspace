@extends('pages.forum')

@section('pertanyaan')
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
                    <img class="card-img-top" src="{{ asset('/gambar/' . $pertanyaan->gambar) }}" alt="Card image cap">
                </div>
            </div>
        </div>
        @auth
            <div class="d-flex flex-row mt-2 ml-3">
                <a href="/pertanyaan" class="btn btn-primary text-decoration-none">Kembali</a>
                <a href="/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-primary text-decoration-none ml-1">Edit</a>
                <form action="/pertanyaan/{{ $pertanyaan->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger text-decoration-none ml-1">
                </form>
            </div>
        @endauth
        @guest
            <a href="/pertanyaan" class="btn btn-primary ml-1 text-decoration-none">Kembali</a>
        @endguest
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
        <h4>Belum ada jawaban</h4>
    @endforelse
@endsection
