@extends('administrator.layouts.main')

@section('title','PPDB | Create')

@section('title-page', 'Add New Field Students')

@section('container')

<div class="card-header pb-0 mb-0 d-flex justify-content-end">
    <a href="/forms" class="btn btn-secondary"> <i class="align-middle" data-feather="rotate-cw"></i> <span class="align-middle"> Back</span> </a>
</div>
<div class="card-body mt-0 pt-0">
   <div class="col-lg-6 mx-auto">
       <form action="/forms" method="post">
        @csrf
          <div class="mb-3">
            <label class="form-label">Name Lable</label>
            <input type="text" class="form-control" name="nameLable" placeholder="">
          </div>
          <div class="mb-3">
            <label class="form-label"> Name Input</label>
            <input type="text" class="form-control" name="nameInput" placeholder="">
          </div>
          <div class=" mb-1 d-flex">
              <label class="form-label" style="margin-right: 20px">Type : </label>
              <div class="check d-flex">
                <div class="form-check" style="margin-right: 10px">
                    <input class="form-check-input" type="checkbox" name="type" value="text" id="checkbox">
                    <label class="form-check-label">
                      Text
                    </label>
                </div> 
                <div class="form-check" style="margin-right: 10px">
                    <input class="form-check-input" type="checkbox" name="type" value="number" id="checkbox">
                    <label class="form-check-label">
                      Number
                    </label>
                </div> 
                <div class="form-check" style="margin-right: 10px">
                    <input class="form-check-input" type="checkbox" name="type" value="textarea" id="checkbox">
                    <label class="form-check-label">
                      Long Text
                    </label>
                </div> 
                <div class="form-check" style="margin-right: 10px">
                    <input class="form-check-input" type="checkbox" name="type" value="date" id="checkbox">
                    <label class="form-check-label">
                      Date
                    </label>
                </div> 
                <div class="form-check" style="margin-right: 10px">
                    <input class="form-check-input" type="checkbox" name="type" value="select" id="checkbox">
                    <label class="form-check-label">
                      Select
                    </label>
                </div>  
              </div>  
          </div>
            <small class="mb-3 text-danger" id="alert">Hanya Boleh Memilih 1 Type</small>  
            <small class="mb-3 text-success" id="select">Silahkan mengisi select di halaman list forms</small>  
          <!-- <div class="mb-3" id="select">
              <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Select 1</label>
                        <input type="text" class="form-control" name="option" id="option" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select 2</label>
                        <input type="text" class="form-control" name="option" id="option" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select 3</label>
                        <input type="text" class="form-control" name="option" id="option" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Select 4</label>
                        <input type="text" class="form-control" name="option" id="option" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select 5</label>
                        <input type="text" class="form-control" name="option" id="option" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select 6</label>
                        <input type="text" class="form-control" name="option" id="option" placeholder="">
                    </div>
                  </div>
              </div>
                <div class="row">
                      <div class="col-lg-8 mx-auto">
                          <small class="text-danger d-block text-center">Jika kurang silahkan tambah di edit data</small>
                      </div>
                  </div>
          </div>    --> 
          <div class="mb-3">
            <button type="submit" class="btn btn-primary px-5 d-block float-end"><i class="bi bi-save"></i> Save</button>
          </div>
       </form>
   </div>
</div>
<script>
    $('#alert').hide();
    $('#select').hide();
    $('input[type=checkbox]').on('change', function(evt) {
        if($('input[id=checkbox]:checked').length >= 2) {
            this.checked = false;
            $('#alert').show();
        }else{
            $('#alert').hide();
        }
    }); 
    $('input[type=checkbox]').on('change', function(evt) {
        if($('input[id=checkbox]:checked').val() == 'select') {
            $('#select').show();
        }else{
             $('#select').hide();
        }
    });
</script>
@endsection