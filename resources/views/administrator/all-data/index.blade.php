@extends('administrator.layouts.main')

@section('title','PPDB | All Data')

@section('title-page', 'Daftar semua data peserta')

@section('container')
<div class="card-header pb-0 mb-0 d-flex justify-content-between">
  <a href="/list" class="btn btn-success"><i class="align-middle" data-feather="list"></i> List By Program </a>
  <a href="/students/create" class="btn btn-primary"><i class="align-middle" data-feather="plus"></i> Insert New Data </a>
</div>
<div class="card-body mt-0 pt-0">

  
<table id="example" class="table display" width="100%">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nomor Peserta</th>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>
      {{-- <th scope="row">{{ $student->id }}</th> --}}
      <td>{{ $loop->iteration }}</td>
      <td>{{ $student->no_peserta }}</td>
      <td>{{ $student->nama_lengkap }}</td>
      <td>
          <a href="/students/{{ $student->no_peserta }}"><span class="badge bg-info"><i class="align-middle" data-feather="eye"></i></span></a>
          <a href="/students/{{ $student->no_peserta }}/edit"><span class="badge bg-success"><i class="align-middle" data-feather="edit"></i></span></a>
          <a href=""><span class="badge bg-danger"> <i class="align-middle" data-feather="trash"></i>  </span></a>
      </td>
    </tr>
    @endforeach

    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  } );
  </script>
    

@endsection