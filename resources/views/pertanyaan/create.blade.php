@extends('layout.master')

@section('content')
    <div class="card card-primary ml-3 mt-3">
        <div class="card-header">
            <h3 class="card-title">Input Pertanyaan</h3>
        </div>

        <form action="/pertanyaan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul"
                        value="{{ old('judul', '') }}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" name="isi" class="form-control" id="isi" value="{{ old('isi', '') }}">
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="gambar"
                        value="{{ old('gambar', '') }}">
                    @error('gambar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kategori_id">kategori_id</label>
                    <select name="kategori_id" class="form-control">
                        <option value="">-Pilih Kategori-</option>
                        @forelse ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @empty
                            <option value="">Tidak ada kategori</option>
                        @endforelse
                    </select>
                    <a class="btn-primary mt-3" href="/kategori/create">Buat Kategori</a>
                    @error('kategori_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit Pertanyaan</button>
            </div>
        </form>
    </div>
@endsection
