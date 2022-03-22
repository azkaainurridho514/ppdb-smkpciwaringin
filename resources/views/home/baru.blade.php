@extends('layouts.main')

@section('title', 'SMKP | ppdb')

@section('container')
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto wel py-5">
            <p class="fs-1 text-light text-center my-auto">PESERTA DIDIK BARU</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-8 mx-auto d-flex justify-content-center">
            <a href="/" class="btn btn-secondary mx-1"><i class="bi bi-arrow-clockwise" style="margin-right: 2px;"></i>Back</a>
        </div>
    </div>
    <div class="row" style="margin-top: 100px">
        <p class="fs-2 text-light text-center wel">Silahkan isi data dengan valid</p>
        <div class="col-lg-5 wel mx-auto text-light py-3 px-3">
            <form action="/peserta-didik-baru" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama :</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukan nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap :</label>
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Masukan nama lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir :</label>
                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin :</label>
                    <select class="form-select @error('jk') is-invalid @enderror" name="jk">
                        <option value="">-Pilih-</option>
                        <option value="Laki - laki" {{ (old('jk') == 'laki-laki')? 'selected' : '' }}>Laki - laki</option>
                        <option value="Perempuan" {{ (old('jk') == 'perempuan')? 'selected' : '' }}>Perempuan</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama :</label>
                    <select class="form-select @error('agama') is-invalid @enderror" name="agama">
                        <option value="">-Pilih-</option>
                        <option value="islam" {{ (old('agama') == 'islam')? 'selected' : '' }}>Islam</option>
                        <option value="protestan"  {{ (old('agama') == 'protestan')? 'selected' : '' }}>Protestan</option>
                        <option value="katolik" {{ (old('agama') == 'katolik')? 'selected' : '' }}>Katolik</option>
                        <option value="hindu" {{ (old('agama') == 'hindu')? 'selected' : '' }}>Hindu</option>
                        <option value="budha" {{ (old('agama') == 'budha')? 'selected' : '' }}>Budha</option>
                        <option value="konghuchu" {{ (old('agama') == 'konghuchu')? 'selected' : '' }}>Konghuchu</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Program Keahlian Yang Di Pilih :</label>
                    <select class="form-select @error('program') is-invalid @enderror" name="program_id">
                        <option value="">-Pilih-</option>
                    @foreach ($programs as $program)
                    <option value="{{ $program->programId }}" {{ (old('program') == $program->programId )? 'selected' : '' }}> {{ $program->nama }}</option>
                    @endforeach
                    </select>

                </div>
                <div class="mb-3">
                    <label class="form-label">Ukuran Baju :</label>
                    <select class="form-select @error('ukuran_baju') is-invalid @enderror" name="ukuran_baju">
                        <option value="">-Pilih-</option>
                        <option value="S" {{ (old('ukuran_baju') == 'S')? 'selected' :'' }}>S</option>
                        <option value="M" {{ (old('ukuran_baju') == 'M')? 'selected' :'' }}>M</option>
                        <option value="L" {{ (old('ukuran_baju') == 'L')? 'selected' :'' }}>L</option>
                        <option value="XL" {{ (old('ukuran_baju') == 'XL')? 'selected' :'' }}>XL</option>
                        <option value="XXL" {{ (old('ukuran_baju') == 'XXL')? 'selected' :'' }}>XXL</option>
                        <option value="XXXL" {{ (old('ukuran_baju') == 'XXXL')? 'selected' :'' }}>XXXL</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor HP Siswa :</label>
                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukan nomor hp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Anak Ke/Dari Jumlah Saudara :</label>
                    <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" name="anak_ke" value="{{ old('anak_ke') }}" placeholder="Anak ke dan dari jumlah saudara">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat">{{ old('alamat') }}</textarea>
                </div>
        </div>
        <div class="col-lg-5 wel mx-auto text-light py-3 px-3">
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Siswa Nasional (NISN) :</label>
                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" placeholder="Masukan NISN anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Kependudukan (NIK) :</label>
                    <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" placeholder="Masukan NIK anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Kartu Keluarga :</label>
                    <input type="number" class="form-control @error('kk') is-invalid @enderror" name="kk" value="{{ old('kk') }}" placeholder="Masukan nomor kartu keluarga anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KPS/KIP (jika ada) :</label>
                    <input type="number" class="form-control @error('kip') is-invalid @enderror" name="kip" value="{{ old('kip') }}" placeholder="Masukan nomor KIP anda jika ada">
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Sekolah (Smp/Mts) :</label>
                    <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah" value="{{ old('asal_sekolah') }}" placeholder="Masukan asal sekolah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat Lengkap Sekolah Asal :</label>
                    <textarea class="form-control @error('alamat_asal_sekolah') is-invalid @enderror" rows="3" name="alamat_asal_sekolah">{{ old('alamat_asal_sekolah') }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Seri Ijazah :</label>
                    <input type="number" class="form-control @error('nomor_seri_ijazah') is-invalid @enderror" name="nomor_seri_ijazah" value="{{ old('nomor_seri_ijazah') }}" placeholder="Masukan nomor seri ijazah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Dan Tahun Kelulusan :</label>
                    <input type="date" class="form-control @error('tahun_kelulusan') is-invalid @enderror" name="tgl_lulus" value="{{ old('tgl_lulus') }}" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Siswa :</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukan email yang valid">
                </div>
                <button type="submit" class="btn btn-primary mt-1 px-5">Kirim</button>
            </form>
            </div>
    </div>
@endsection
