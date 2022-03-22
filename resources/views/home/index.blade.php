@extends('layouts.main')

@section('title', ' | PPDB')

@section('container')
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto wel py-5">
            <p class="fs-1 text-light text-center my-auto">PENERIMAAN PESERTA DIDIK BARU</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-8 mx-auto d-flex justify-content-center">
            <a href="/peserta-didik-baru" class="btn mx-1 text-light shadow" style="background: rgb(11, 29, 196);">Peserta didik baru</a>
            <a class="btn mx-1 text-light shadow kirim" style="background: rgb(11, 29, 196);" disabled>Peserta didik baru (pindahan)</a>
        </div>
    </div>
@endsection