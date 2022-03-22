@extends('administrator.layouts.main')

@section('title','PPDB | Create new program')

@section('title-page', 'Tambah jurusan baru')

@section('container')
<div class="card-header border-bottom pb-0 mb-0 d-flex justify-content-center">
  <p class="fs-6 text-danger">  </p>
</div>
<div class="card-body mt-0 pt-4">

  <form action="/programs" method="post" class="d-flex flex-column align-items-center">
    @csrf
    <div class="mb-3 col-lg-6">
      <label class="form-label text-dark">Program :</label>
      <input type="text" class="form-control @error('program') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
    </div>

    <div class="mb-3 col-lg-6">
      <label class="form-label text-dark">Slug :</label>
      <input type="text" class="form-control disabled" name="slug" value="{{ old('slug') }}">
    </div>

    <div class="mb-3 col-lg-6">
      <label class="form-label text-dark">Campus : <small class="text-danger">Harus di sertai 0!</small></label>
      <input type="text" class="form-control @error('kampus') is-invalid @enderror" name="kampus" value="{{ old('kampus') }}">
    </div>

    <div class="mb-3 col-lg-6">
      <label class="form-label text-dark">Id Program :</label>
      <input type="text" class="form-control @error('programId') is-invalid @enderror" name="programId" value="{{ old('programId') }}">
    </div>
    <div class="mb-3 col-lg-6 d-flex justify-content-center">
      <button type="submit" class="btn btn-success" style="margin-right: 2px">Update</button>
      <a href="/programs" class="btn btn-secondary" style="margin-left: 2px">back</a>
    </div>
    
  </form>

</div>

    

@endsection