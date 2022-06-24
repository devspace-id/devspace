@extends('layout.master')

@section('content')
    <div class="card card-primary ml-3 mt-3">
        <div class="card-header">
            <h3 class="card-title">Halaman Profil</h3>
        </div>

        <form action="/profil/{{ $profil->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <label>NAMA</label>
                <input type="text" class="form-control" value="{{ $profil->user->name }}" disabled>
                <label>Email</label>
                <input type="text" class="form-control" value="{{ $profil->user->email }}" disabled>
                <div class="form-group">
                    <label for="biodata">biodata</label>
                    <input type="text" name="biodata" class="form-control" id="biodata"
                        value="{{ $profil->biodata }}">
                    @error('biodata')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="umur">umur</label>
                    <input type="number" name="umur" class="form-control" id="umur" value="{{ $profil->umur }}">
                    @error('umur')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat"
                        value="{{ $profil->alamat }}">
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
