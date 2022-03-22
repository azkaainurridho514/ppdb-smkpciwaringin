@extends('administrator.layouts.main')

@section('title','PPDB | All Data')

@section('title-page', 'Daftar semua jurusan')

@section('container')
<div class="card-header pb-0 mb-0 d-flex justify-content-end">
  <a href="/programs/create" class="btn btn-primary"><i class="align-middle" data-feather="plus"></i> Insert New Data </a>
</div>
<div class="card-body mt-0 pt-0">
  
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Programs</th>
        <th scope="col">Slug</th>
        <th scope="col">Campus</th>
        <th scope="col">Id Program</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($programs as $program)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $program->nama }}</td>
      <td>{{ $program->slug }}</td>
      <td>{{ $program->kampus }}</td>
      <td>{{ $program->programId }}</td>
      <td>
          <a href="/programs/{{ $program->slug }}/edit"><span class="badge bg-success"><i class="align-middle" data-feather="edit"></i></span></a>
          <a href=""><span class="badge bg-danger"> <i class="align-middle" data-feather="trash"></i>  </span></a>
      </td>
    </tr>
    @endforeach

    </tbody>
  </table>
</div>

    

@endsection