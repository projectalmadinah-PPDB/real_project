@extends('pages.admin.dashboard.layouts.parent')

@section('title','Create Document')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">Create Document</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Document</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Document</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Create Document</h4>
                  <form class="forms-sample" action="{{route('admin.document.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
                    <div class="form-group">
                      <label for="exampleInputName1">Kartu Keluarga <strong>*File Jenis PDF</strong></label>
                      <input type="file" class="form-control text-white @error('file_pdf') is-invalid @enderror" id="exampleInputName1" name="file_pdf[]" accept=".pdf">
                      @error('file_pdf')
                              <div class="text-danger">{{$message}}</div>
                          @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Kartu Ijazah <strong>*File Jenis PDF</strong></label>
                        <input type="file" class="form-control text-white @error('file_pdf') is-invalid @enderror" id="exampleInputName1" name="file_pdf[]" accept=".pdf">
                        @error('file_pdf')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Kartu Akta <strong>*File Jenis PDF</strong></label>
                        <input type="file" class="form-control text-white @error('file_pdf') is-invalid @enderror mb-3" id="exampleInputName1" name="file_pdf[]" accept=".pdf">
                        @error('file_pdf')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>    
@endsection