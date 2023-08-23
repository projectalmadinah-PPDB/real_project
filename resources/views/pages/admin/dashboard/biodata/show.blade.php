@extends('pages.admin.dashboard.layouts.parent')

@section('title','Biodata Pribadi')

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
                  <div class="card-title">Detail Document {{$pendaftaran->user->name}}</div>
                  <a href="{{route('admin.biodata.index')}}" class="btn btn-primary float-end text-white">Back</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <div class="col-6">
                    <h5>Data Pribadi</h5>
                    <div class="mb-2">
                      <label for="">Nama Lengkap : </label>
                      <strong>{{$pendaftaran->user->name}}</strong>
                    </div>
                    <div class="mb-2">
                      <label for="">Nomor Hp : </label>
                      <strong>{{$pendaftaran->user->nomor}}</strong>
                    </div>
                    <div class="mb-2">
                      <label for="">Email : </label>
                      <strong>{{$pendaftaran->user->email}}</strong>
                    </div>
                    <div class="mb-2">
                      <label for="">Jenis Kelamin : </label>
                      <strong>{{$pendaftaran->user->jenis_kelamin}}</strong>
                    </div>
                    <div>
                      <label for="">Tanggal Lahir : </label>
                      <strong>{{$pendaftaran->user->tanggal_lahir}}</strong>
                    </div>
                  </div>
                  <div class="col-6">
                    <h5>Data Org Tua</h5>
                    <div class="mb-2">
                      <label for="">Nama Ayah : </label>
                      <strong>{{$pendaftaran->nama_ayah}}</strong>
                    </div>
                    <div class="mb-2">
                      <label for="">Nomor Ayah : </label>
                      <strong>{{$pendaftaran->no_ayah}}</strong>
                    </div>
                    <div class="mb-2">
                      <label for="">Nama Ibu : </label>
                      <strong>{{$pendaftaran->nama_ibu}}</strong>
                    </div>
                    <div class="mb-2">
                      <label for="">Nomor Ibu : </label>
                      <strong>{{$pendaftaran->no_ibu}}</strong>
                    </div>
                    <div>
                      <label for="">Alamat : </label>
                      <strong>{{$pendaftaran->alamat}}</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
@endsection