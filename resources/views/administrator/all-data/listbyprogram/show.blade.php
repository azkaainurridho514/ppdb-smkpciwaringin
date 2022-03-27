@extends('administrator.layouts.main')

@section('title','PPDB | All Data')

@section('title-page', 'Daftar semua data peserta')

@section('container')
<div class="card-header pb-0 mb-0 d-flex justify-content-end">
  <a href="/list" class="btn btn-secondary mb-2"> <i class="align-middle" data-feather="rotate-cw"></i> <span class="align-middle"> Back</span> </a>
</div>
<div class="card-body mt-0 pt-0">

    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nomor Peserta</th>
              <th scope="col">Nama</th>
            </tr>
          </thead>
          {{-- {{ $students }} --}}
              @foreach ($students as $student)    
              <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                   <td>{{ $student->no_peserta }}</td>
                  <td>{{ $student->nama_lengkap }}</td>
              </tr>
              @endforeach
          </tbody>
    </table>
  
</div>
@endsection