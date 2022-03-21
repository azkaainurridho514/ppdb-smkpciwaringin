@extends('administrator.layouts.main')

@section('title','PPDB | Create')

@section('title-page', 'Add New Field Students')

@section('container')
<div class="card-header pb-0 mb-0 d-flex justify-content-end">
    <a href="/forms" class="btn btn-secondary"> <i class="align-middle" data-feather="rotate-cw"></i> <span class="align-middle"> Back</span> </a>
</div>
<div class="card-body mt-0 pt-0">
   <div class="row d-flex justify-content-center mt-2">
       <div class="col-lg-6">
           {{-- <form action="" method="post">
               @csrf
               <div class="mb-3">
                <label class="form-label text-dark">Nama Label </label>
                <input type="text" class="form-control @error('namaLable') is-invalid @enderror" name="namaLable">
               </div>
               <div class="mb-3">
                <label class="form-label text-dark">Nama Input </label>
                <input type="text" class="form-control @error('namaLable') is-invalid @enderror" name="namaLable">
               </div>
               <div class="mb-3">
                <label class="form-label text-dark">Type :  <small class="text-danger">Pilih satu!</small></label>
                <div class="check">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="text">
                        <label class="form-check-label" >Text</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="number">
                        <label class="form-check-label" >Number</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="date">
                        <label class="form-check-label" >Date</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="textarea">
                        <label class="form-check-label" >Text Panjang</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="check-select" value="select">
                        <label class="form-check-label" >Select</label>
                    </div>
                </div>
               </div>
               <div class="mb-3">
                <label class="form-label text-dark">Validasi </label>
                <select  class="form-select @error('') is-invalid @enderror" name="">
                    <option value="">- PILIH -</option>
                    <option value="">Tidak boleh kosong</option>
                    <option value="">Boleh kosong</option>
                </select>
               </div>
               <div class="mb-3">
                <label class="form-label text-dark">Minimal Panjang Character </label>
                <input type="text" class="form-control @error('') is-invalid @enderror" name="">
               </div>
               <div class="mb-3">
                <label class="form-label text-dark">Maximal Panjang Character </label>
                <input type="text" class="form-control @error('') is-invalid @enderror" name="">
               </div>
               <div class="mb-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Create</button>
               </div>

           </form> --}}





            {{-- <form action="/forms" method="post">
             @csrf
                @foreach ($form as $f)
                 <div class="mb-3">
                    @switch($f->type)
                        @case('text')
                            <label class="form-label text-dark">{{ $f->nameLable }}</label>
                            <input type="{{ $f->type }}" class="form-control @error('{{ $f->nameLable }}') is-invalid @enderror" name="{{ $f->nameInput }}" value="{{ old($f->nameInput) }}">
                            @break
                        @case('date')
                            <label class="form-label text-dark">{{ $f->nameLable }}</label>
                            <input type="{{ $f->type }}" class="form-control" name="{{ $f->nameInput }}" value="{{ old($f->nameInput) }}">
                            @break
                        @case('textarea')
                            <label class="form-label text-dark">{{ $f->nameLable }}</label>
                            <textarea class="form-control" name="{{ $f->nameInput }}">{{ old($f->nameInput) }}</textarea>
                            @break
                        @case('select')
                        <label class="form-label text-dark">{{ $f->nameLable }}</label>
                        <select  class="form-select" name="{{ $f->nameInput }}">
                            @switch($f->select_id)
                                @case('program')
                                 @foreach ($f->program as $p)
                                    <option value="{{ $p->programId }}">{{ $p->nama }}</option>
                                 @endforeach 
                                    @break
                                @default
                                @foreach ($f->select as $s)
                                    <option value="{{ $s->option }}">{{ $s->option }}</option>
                                @endforeach    
                            @endswitch
                        </select>
                        @break
                        @default
                    @endswitch
                 </div>
                @endforeach
                <button type="submit" class="btn btn-primary">kirim</button>
            </form> --}}







       </div>
   </div>
</div>
@endsection