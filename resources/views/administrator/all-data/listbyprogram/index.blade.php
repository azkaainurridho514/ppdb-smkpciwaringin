@extends('administrator.layouts.main')

@section('title','PPDB | All Data')

@section('title-page', 'Daftar semua data peserta')

@section('container')
<div class="card-header pb-0 mb-0 d-flex justify-content-end">
  <a href="/students" class="btn btn-secondary mb-2"> <i class="align-middle" data-feather="rotate-cw"></i> <span class="align-middle"> Back</span> </a>
</div>
<div class="card-body mt-0 pt-0">

<div class="row justify-content-center">
  @foreach ($programs as $program)
      <div class="col-lg-3 mb-2">
       <a href="/list/{{ $program->slug }}" class="btn btn-primary">{{ $program->nama }}</a>
      </div>
   @endforeach
</div>
  
</div>
@endsection