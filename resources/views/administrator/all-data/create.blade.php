@extends('administrator.layouts.main')

@section('title','PPDB | Insert')

@section('title-page', 'Insert data peserta')

@section('container')
<div class="card-header  ">
    <div class="border-bottom border-2 border-dark d-flex justify-content-between align-items-center py-0">
        <p class="fs-6 py-0 my-0">Isi semua field yang tidak boleh kosong!</p>
        <a href="/students" class="btn btn-secondary mb-2"> <i class="align-middle" data-feather="rotate-cw"></i> <span class="align-middle"> Back</span> </a>
    </div>
</div>
<div class="card-body">
<div class="card shadow-lg">
    <div class="row">
        <div class="col-lg-5 wel mx-auto text-light py-3 px-3">
            <form action="/students" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-dark">Nama :</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nama Lengkap :</label>
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Tanggal Lahir :</label>
                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Jenis Kelamin :</label>
                    <select class="form-select @error('jk') is-invalid @enderror" name="jk">
                        <option value="Laki - laki">Laki - laki</option>    
                        <option value="Perempuan">Perempuan</option>    
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Agama :</label>
                    <select class="form-select @error('agama') is-invalid @enderror" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghuchu">Konghuchu</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Program Keahlian Yang Di Pilih :</label>
                    <select class="form-select @error('program_id') is-invalid @enderror" name="program_id">
                        @foreach ($programs as $program)
                        <option value="{{ $program->id }}">{{ $program->nama }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Ukuran Baju :</label>
                    <select class="form-select @error('ukuran_baju') is-invalid @enderror" name="ukuran_baju" >
                      <option value="S">S</option> 
                      <option value="M">M</option> 
                      <option value="L">L</option> 
                      <option value="XL">XL</option> 
                      <option value="XXL">XXL</option> 
                      <option value="XXXL">XXXL</option> 
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor HP Siswa :</label>
                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Anak Ke/Dari Jumlah Saudara :</label>
                    <input type="number" class="form-control  @error('anak_ke') is-invalid @enderror" name="anak_ke">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Alamat Lengkap</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3"></textarea>
                </div>
        </div>
        <div class="col-lg-5 wel mx-auto text-light py-3 px-3">
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor Induk Siswa Nasional (NISN) :</label>
                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor Induk Kependudukan (NIK) :</label>
                    <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor Kartu Keluarga :</label>
                    <input type="number" class="form-control @error('kk') is-invalid @enderror" name="kk">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor KPS/KIP (jika ada) :</label>
                    <input type="number" class="form-control @error('kip') is-invalid @enderror" name="kip">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Asal Sekolah (Smp/Mts) :</label>
                    <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Alamat Lengkap Sekolah Asal :</label>
                    <textarea class="form-control @error('alamat_asal_sekolah') is-invalid @enderror" name="alamat_asal_sekolah" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Nomor Seri Ijazah :</label>
                    <input type="number" class="form-control @error('nomor_seri_ijazah') is-invalid @enderror" name="nomor_seri_ijazah">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Tanggal Dan Tahun Kelulusan :</label>
                    <input type="date" class="form-control @error('tgl_lulus') is-invalid @enderror" name="tgl_lulus">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark">Email Siswa :</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                </div>
                <button type="submit" class="btn btn-primary mt-1 px-3"><i class="align-middle" data-feather="save" style="width: 50px"></i></button>
            </form>
        </div>
    </div>
</div>
</div>

    

@endsection