@extends('pages.article')

@section('artikel')
    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('/gambar/' . $artikel->gambar) }}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="text-container">
                    <h3>{{ $artikel->judul }}</h3>
                    <h6>Ditulis Oleh: {{ $artikel->user->name }}</h6>
                    <p class="card-text">{!! $artikel->isi !!}</p>
                </div>
                <a href="/artikel" class="btn btn-primary text-decoration-none">Kembali</a> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of tab-pane -->
    <!-- end of tab -->
@endsection
