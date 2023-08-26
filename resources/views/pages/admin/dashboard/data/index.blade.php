@extends('pages.admin.dashboard.layouts.parent')

@section('title','Data Valid')

@section('content')
<div class="main-panel">
    <div class="content">
      <div class="container-fluid">
        <h4 class="page-title">Pendaftaran</h4>
        <div class="row">
          <div class="col-md-12">
            
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <div class="card-title">Pendaftaran Table</div>
                  <a href="{{route('admin.document.create')}}" class="btn btn-primary float-end text-white">Create New</a>
                </div>
              </div>
              <div class="card-body">
                <form action="{{route('admin.pendaftaran.index')}}" method="get">
                    @csrf
                    <div class="d-flex">
                      <input type="text" name="search" class="form-control w-25 mb-3" >
                      <div>
                        <button class="btn btn-primary" type="submit">Find</button>
                      </div>
                    </div>
                    </form>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Nomor Hp</th>
                        <th>Status</th>
                        <th>Nilai</th>
                        {{-- <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th> --}}
                        {{-- <th>NIK</th> --}}
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $index => $item)
                        <tr>
                          <td>{{$index + 1}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->nomor}}</td>
                          {{-- <td>{{$item->tanggal_lahir}}</td>
                          <td>{{$item->jenis_kelamin}}</td> --}}
                          {{-- <td>{{$item->nik}}</td> --}}
                          @if($item->pendaftaran && $item->document)
                          <td><button class="badge badge-success border-0">Lengkap &#x2714;</button></td>
                          @elseif ($item->pendaftaran && !$item->document)
                          <td>
                            <button class="badge badge-success border-0">data &#x2714;
                            </button>
                            <a href="" class="badge badge-danger">Document &#x2715;</a>
                          </td>
                          @else
                          <td>
                            <button class="badge badge-danger border-0">Tidak Legkap</button></td>
                          @endif
                          <td>
                            @if ($item->pendaftaran->status == 'tidak')
                            <form action="{{route('admin.pengecekan',$item->pendaftaran->id)}}" method="post">
                              @csrf
                              @method('POST')
                              <button type="submit" name="status" value="lolos" class="badge badge-success border-0">Lulus</button>
                              <button type="submit" name="status" value="gagal" class="badge badge-danger border-0">Gagal</button>
                            </form>
                            @elseif($item->pendaftaran->status == 'lolos')
                                <button class="badge badge-success border-0">Lulus</button>
                            @elseif($item->pendaftaran->status == 'gagal')
                                <button class="badge badge-danger border-0">Gagal</button>
                            @else
                            
                            @endif
                          </td>
                          <td>
                            @if($item->pendaftaran == NULL)
                            <a href="" class="badge badge-danger">Tidak Ada Data</a>
                            @else
                            <a href="{{route('admin.biodata.show',$item->pendaftaran->id)}}" class="badge badge-primary">Data Pribadi</a>
                            @endif
                            @if ($item->document) 
                            <a href="{{route('admin.biodata.show_document',$item->document->id)}}" class="badge badge-warning">Document</a>
                            @endif
                            <a href="{{route('admin.pendaftaran.edit',$item->id)}}" class="badge badge-warning">Edit</a>
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