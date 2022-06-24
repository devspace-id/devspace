@extends('layouts.home')

@section('content')

<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="above-heading">ARTICLE</div>
                <h2 class="h2-heading">Marketing Automation Will Bring More Qualified Leads</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <section class="row">
            <div class="col-lg-12">
                @foreach ($artikel as $artikel)
                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{asset('images/'.$artikel->gambar)}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $artikel->judul }}</h4>
                        <p>{{ $artikel->isi }}</p>
                    </div>
                      
                </div>
                @endforeach
                <!-- end of card -->
            </div> <!-- end of col -->
        </section> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<!-- end of cards-1 -->
@endsection