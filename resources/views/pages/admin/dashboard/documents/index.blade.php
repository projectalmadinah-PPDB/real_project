@extends('pages.admin.dashboard.layouts.parent')

@section('title','Document')

@section('content')
  <div class="main-panel">
    <div class="content">
      <div class="container-fluid">
        <h4 class="page-title">Document</h4>
        <div class="row">
          <div class="col-md-12">
            
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <div class="card-title">Document Table</div>
                  <a href="{{route('admin.document.create')}}" class="btn btn-primary float-end text-white">Create New</a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Kartu Keluarga</th>
                        <th>Ijazah</th>
                        <th>Akta</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($document as $index => $item)
                        <tr>
                          <td>{{$index + $document->firstItem()}}</td>
                          <td>{{$item->user->name}}</td>
                          <td>{{$item->kk ? 'ADA' : 'TIDAK ADA'}}</td>
                          <td>{{$item->ijazah ? 'ADA' : 'TIDAK ADA'}}</td>
                          <td>{{$item->akta ? 'ADA' : 'TIDAK ADA'}}</td>
                          <td>
                            <a href="{{route('admin.document.show',$item->id)}}" class="badge badge-primary">Show</a>
                            <a href="" class="badge badge-warning">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
@endsection