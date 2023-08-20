@extends('pages.admin.dashboard.layouts.parent')

@section('title','Article')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> All Article </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.article.index')}}">Article</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Article</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title">Detail Article</h4>
                  <label for="" class="form-label">Image</label>
                  <img src="{{ asset('storage/' . $articles['image'])}}" style="width:450px;height:280px" class="rounded-0" alt="">
                </div>
                <div class="col-md-6">
                  <h4 class="card-title">Detail</h4>
                  <div class="mb-2">
                    <label for="" class="form-label">Title</label>
                    <input type="text" disabled value="{{$articles->title}}" class="d-block bg-white border-0 px-3 py-1 rounded-lg text-bold w-75">
                  </div>
                  <div class="mb-2">
                    <label for="" class="form-label">Description</label>
                    <textarea disabled cols="10" rows="5" class="d-block bg-white border-0 px-3 py-1 rounded-lg text-bold w-75">{{$articles->title}}</textarea>
                  </div>
                  <div class="mb-2">
                    <label for="" class="form-label">Author</label>
                    <input type="text" disabled value="{{$articles->user->name}}" class="d-block bg-white border-0 px-3 py-1 rounded-lg text-bold w-75">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Slug</label>
                    <input type="text" disabled value="{{$articles->slug}}" class="d-block bg-white border-0 px-3 py-1 rounded-lg text-bold w-75">
                  </div>
                  <a href="{{route('admin.article.index')}}" type="button" class="btn btn-outline-warning btn-icon-text">
                    <i class="mdi mdi-keyboard-backspace"></i> Back </a>
                </div>
              </div>
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
</div>
@endsection