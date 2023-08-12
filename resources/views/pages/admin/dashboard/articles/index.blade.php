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
      @if (session('create'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('create')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @elseif (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{session('update')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @elseif (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('delete')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Article Table</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Photo</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Slug</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($article as $index => $item)
                    <tr>
                      <td>{{$index + 1}}</td>
                      <td><img src="{{ asset('storage/' . $item['image'])}}" style="width:120px;height:70px" class="rounded-0"></td>
                      <td>{{$item['title']}}</td>
                      <td>{{$item->user->name}}</td>
                      <td>{{$item['slug']}}</td>
                      <td>
                        <a href="{{route('admin.article.show',$item->slug)}}" class="border border-0 btn btn-primary"><i class="mdi mdi-file-find"></i></a>
                        <a href="{{route('admin.article.edit',$item->slug)}}" class="border border-0 btn btn-warning"><i class="mdi mdi-pencil"></i></a>
                        <form action="{{ route('admin.article.delete', $item->id) }}" method="POST" class="border-0 d-inline">
                          @csrf
                          @method('DELETE')
                          <button class="border border-0 btn btn-danger"><i class="mdi mdi-delete"></i></button>
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