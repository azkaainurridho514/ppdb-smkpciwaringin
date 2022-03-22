@extends('administrator.layouts.main')

@section('title','PPDB | All Data')

@section('title-page', 'Daftar semua data peserta')

@section('container')
<div class="card-header border-bottom pb-0 mb-0 d-flex justify-content-center">
  <p class="fs-6 text-danger"> Hati - hati saat update Jurusan! </p>
</div>
<div class="card-body mt-0 pt-4">

  <form action="/programs/{{ $program->slug }}" method="post" class="d-flex flex-column align-items-center">
    @csrf
    @method('put');
    <div class="mb-3 col-lg-6">
      <label class="form-label text-dark">Program :</label>
      <input type="text" class="form-control @error('program') is-invalid @enderror" name="nama" value="{{ $program->nama }}">
    </div>

    <div class="mb-3 col-lg-6">
      <label class="form-label text-dark">Slug :</label>
      <input type="text" class="form-control disabled" name="slug" value="{{ $program->slug }}" >
    </div>

    <div class="mb-3 col-lg-6">
      <label class="form-label text-dark">Campus : <small class="text-danger">Harus di sertai 0!</small></label>
      <input type="text" class="form-control @error('kampus') is-invalid @enderror" name="kampus" value="{{ $program->kampus }}">
    </div>

    <div class="mb-3 col-lg-6">
      <label class="form-label text-dark">Id Program :</label>
      <input type="text" class="form-control @error('programId') is-invalid @enderror" name="programId" value="{{ $program->programId }}">
    </div>
    <div class="mb-3 col-lg-6 d-flex justify-content-center">
      <button type="submit" class="btn btn-success" style="margin-right: 2px">Update</button>
      <a href="/programs" class="btn btn-secondary" style="margin-left: 2px">back</a>
    </div>
    
  </form>

</div>

    

@endsection