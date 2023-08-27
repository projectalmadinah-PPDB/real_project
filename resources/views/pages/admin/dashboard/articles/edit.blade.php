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
            <form action="{{route('admin.article.update',$article->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control"  name="title"  value="{{$article->title}}">
                          </div>
                          <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea name="desc" class="form-control">{{$article->desc}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="nomor" class="d-inline">Photo Informasi</label>
                            <img src="{{asset('/storage/'. $article['image'])}}" alt="" class="w-50 d-block">
                            <input name="image" class="form-control" type="file">
                          </div>
                        </div>
                      </div>
                    <div class="card-action">
                      <button class="btn btn-success" type="submit">Submit</button>
                      <a href="{{route('admin.article.index')}}" class="btn btn-warning" type="button">Back</a>
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