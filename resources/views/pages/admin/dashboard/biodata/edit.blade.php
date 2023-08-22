@extends('pages.admin.dashboard.layouts.parent')

@section('title' , 'Create Article')

@section('content')
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <h4 class="page-title">Forms</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Base Form Control</div>
            </div>
            <form action="{{route('admin.article.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="Title">Nama Lengkap</label>
                            <input type="text" class="form-control"  name="name" placeholder="Enter Name">
                          </div>
                          <div class="form-group">
                            <label for="nomor">NO HP</label>
                            <input name="nomor" class="form-control" type="text">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" class="form-control" type="email">
                          </div>
                          <div class="form-group">
                            <label for="email">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir">
                          </div>
                          <div class="form-group">
                            <label for="email">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-select">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="Title">Nama Ayah</label>
                            <input type="text" class="form-control"  name="nama_ayah" placeholder="Enter Name">
                          </div>
                          <div class="form-group">
                            <label for="nomor">Nomor Ayah</label>
                            <input name="no_ayah" class="form-control" type="text">
                          </div>
                          <div class="form-group">
                            <label for="email">Nama Ibu</label>
                            <input name="nama_ibu" class="form-control" type="text">
                          </div>
                          <div class="form-group">
                            <label for="email">Nomor Ibu</label>
                            <input type="text" class="form-control" name="no_ibu">
                          </div>
                          <div class="form-group">
                            <label for="email">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-select">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="card-action">
                          <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                      </div>    
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection