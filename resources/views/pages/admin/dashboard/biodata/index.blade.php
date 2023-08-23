@extends('pages.admin.dashboard.layouts.parent')

@section('title','Biodata')

@section('content')
<div class="main-panel">
    <div class="content">
      <div class="container-fluid">
        <h4 class="page-title">Biodata</h4>
        <div class="row">
          <div class="col-md-12">
            
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <div class="card-title">Biodata Table</div>
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
                        <th>Nomor Hp</th>
                        <th>Email</th>
                        <th>Status</th>
                        {{-- <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th> --}}
                        {{-- <th>NIK</th> --}}
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $index => $item)
                        <tr>
                          <td>{{$index + 1}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->nomor}}</td>
                          <td>{{$item->email}}</td>
                          {{-- <td>{{$item->tanggal_lahir}}</td>
                          <td>{{$item->jenis_kelamin}}</td> --}}
                          {{-- <td>{{$item->nik}}</td> --}}
                          @if($item->pendaftaran && $item->document)
                          <td><button class="badge badge-success border-0">Lengkap</button></td>
                          @else
                          <td><button class="badge badge-danger border-0">Tidak Legkap</button></td>
                          @endif
                          <td>
                            @if($item->pendaftaran == NULL)
                            <a href="" class="badge badge-danger">Tidak Ada Data</a>
                            @else
                            <a href="{{route('admin.biodata.show',$item->pendaftaran->id)}}" class="badge badge-primary">Data Pribadi</a>
                            @endif
                            @if ($item->document == NULL)
                            <a href="" class="badge badge-danger">Tidak Ada Document</a>
                            @else
                            <a href="{{route('admin.biodata.show_document',$item->document->id)}}" class="badge badge-warning">Document</a>
                            @endif
                            <a href="{{route('admin.biodata.edit',$item->id)}}" class="badge badge-warning">Edit</a>
                            <form action="{{route('admin.biodata.destroy',$item->id)}}" method="post" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="badge badge-danger border-0">Delete</button>
                            </form>
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