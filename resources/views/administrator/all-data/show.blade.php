@extends('administrator.layouts.main')

@section('title','PPDB | All Data')

@section('title-page', 'Detail data peserta')

@section('container')
<div class="card-body">
<div class="card shadow-lg">
    <p class="fs-5 text-dark border-bottom border-2 border-dark">Nomor peserta: {{ $student->no_peserta }}</p>
    <div class="row">
        <div class="col-lg-5 wel mx-auto text-light py-3 px-3">
                <div class="mb-3">
                    <label class="form-label text-dark">Nama :</label>
                    <input type="text" class="form-control" disabled value="{{ $student->nama }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nama Lengkap :</label>
                    <input type="text" class="form-control" disabled value="{{ $student->nama_lengkap }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Tanggal Lahir :</label>
                    <input type="date" class="form-control" disabled value="{{ $student->tanggal_lahir }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Jenis Kelamin :</label>
                    <select class="form-select" disabled>
                        <option selected>{{ $student->jk }}</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Agama :</label>
                    <select class="form-select" disabled>
                        <option selected>{{ $student->agama }}</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Program Keahlian Yang Di Pilih :</label>
                    <select class="form-select" disabled>
                        <option selected>{{ $student->program->nama }}</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Ukuran Baju :</label>
                    <select class="form-select" disabled>
                        <option selected>{{ $student->ukuran_baju }}</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor HP Siswa :</label>
                    <input type="number" class="form-control" disabled value="{{ $student->no_hp }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Anak Ke/Dari Jumlah Saudara :</label>
                    <input type="number" class="form-control" disabled value="{{ $student->anak_ke }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Alamat Lengkap</label>
                    <textarea class="form-control" rows="3" disabled>{{ $student->alamat }}</textarea>
                </div>
        </div>
        <div class="col-lg-5 wel mx-auto text-light py-3 px-3">
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor Induk Siswa Nasional (NISN) :</label>
                    <input type="number" class="form-control" disabled value="{{ $student->nisn }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor Induk Kependudukan (NIK) :</label>
                    <input type="number" class="form-control" disabled value="{{ $student->nik }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor Kartu Keluarga :</label>
                    <input type="number" class="form-control" disabled value="{{ $student->kk }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor KPS/KIP (jika ada) :</label>
                    <input type="number" class="form-control" disabled value="{{ $student->kip }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Asal Sekolah (Smp/Mts) :</label>
                    <input type="text" class="form-control" disabled value="{{ $student->asal_sekolah }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Alamat Lengkap Sekolah Asal :</label>
                    <textarea class="form-control" rows="3" disabled>{{ $student->alamat_asal_sekolah }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor Seri Ijazah :</label>
                    <input type="number" class="form-control" disabled value="{{ $student->nomor_seri_ijazah }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Tanggal Dan Tahun Kelulusan :</label>
                    <input type="date" class="form-control" disabled value="{{ $student->tgl_lulus }}">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Email Siswa :</label>
                    <input type="email" class="form-control" disabled value="{{ $student->email }}">
                </div>
                <a href="/students" class="btn btn-secondary mt-1 px-5"> <i class="align-middle" data-feather="rotate-cw"></i> <span class="align-middle"> Back</span> </a>
        </div>
    </div>
</div>
</div>

    

@endsection