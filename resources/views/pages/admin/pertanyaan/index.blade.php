@extends('layout.master')

@section('judul', 'Daftar Pertanyaan')

@section('content')
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Pertanyaan</th>
      <th>Kategori</
    
    </tr>
  </thead>
  <tbody>
  	@foreach ($pertanyaan as $pertanyaan)
      <tr>
        <td>{{ $nama->user->nama }}</td>
        <td>{{ $->pertanyaan->pertanyaan }}</td> 
        <td>{{$pertanyaan->kategori }}</td>
       
      </tr>
    @endforeach
  </tbody>
</table>
@endsection

@push('script')
  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>
@endpush