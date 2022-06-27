@extends('layout.master')

@section('content')
    <div class="card card-primary ml-3 mt-3">
        <div class="card-header">
            <h3 class="card-title">Buat Artikel</h3>
        </div>

        <form action="/artikel" method="POST" enctype="multipart/form-data">
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
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="gambar"
                        value="{{ old('gambar', '') }}">
                    @error('gambar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea name="isi" class="form-control" id="isi" value="{{ old('isi', '') }}"></textarea>
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Terbitkan Artikel</button>
            </div>
        </form>
    </div>

    @push('script')
        <script src="https://cdn.tiny.cloud/1/3ofqonqnhk7lpq2ag9gmxc0y8uv79mtp9qjp2dhkzhng4no3/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
            });
        </script>
    @endpush
@endsection
