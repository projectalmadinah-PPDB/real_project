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
              <div class="card-body">
                <div class="form-group">
                  <label for="Title">Title</label>
                  <input type="text" class="form-control"  name="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="email">Desc</label>
                  <textarea name="desc" id="" cols="30" rows="2" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="email">Image</label>
                  <input type="file" class="form-control" name="image">
                </div>
              </div>
              <div class="card-action">
                <button class="btn btn-success" type="submit">Submit</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
    {{-- <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">Create Articles</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Articles</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Articles</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form Create Article</h4>
                <form class="forms-sample" action="{{route('admin.article.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                  <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control text-white @error('title') is-invalid @enderror" id="exampleInputName1" placeholder="Title" name="title" value="{{old('title')}}">
                    @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control text-white @error('desc') is-invalid @enderror" id="exampleTextarea1" rows="4" name="desc">{{old('desc')}}</textarea>
                    @error('desc')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" class="d-block @error('image') is-invalid @enderror">
                    @error('image')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                  </div>
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
  </div>     --}}
@endsection