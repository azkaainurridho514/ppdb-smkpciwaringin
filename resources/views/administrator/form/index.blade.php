@extends('administrator.layouts.main')

@section('title','PPDB | Info Forms')

@section('title-page', 'List Forms')

@section('container')
<div class="card-header pb-0 mb-0 d-flex justify-content-end">
    <a href="/forms/create" class="btn btn-primary"><i class="align-middle" data-feather="plus"></i> New Form </a>
</div>
<div class="card-body mt-0 pt-0">
    <table class="table table-responsive table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name Lable</th>
            <th scope="col">Name Input</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($forms as $form)  
           <tr>
               <th scope="row">{{ $loop->iteration }}</th>
               <td>{{ $form->nameLable }}</td>
               <td>{{ $form->nameInput }}</td>
               <td>{{ $form->type }}</td>
               <td>
                   <a href="/forms/{{ $form->id }}/edit" class="badge bg-success">Edit</a>
                   <a href="" class="badge bg-danger">Delete</a>
               </td>
            </tr>
            @endforeach 

        </tbody>
      </table>
   
</div>
@endsection









  