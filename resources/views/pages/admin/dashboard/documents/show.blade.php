@extends('pages.admin.dashboard.layouts.parent')

@section('title','Detail Document')

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
                  <div class="card-title">Detail Document {{$document->user->name}}</div>
                  <a href="{{route('admin.document.index')}}" class="btn btn-primary float-end text-white">Back</a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Kartu Keluarga</th>
                        <th>Ijazah</th>
                        <th>Akta</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>{{$document->user->name}}</td>
                          <td><embed src="{{ asset('storage/' . $document->kk) }}" width="100%" height="150px" type="application/pdf"></td>
                          <td><embed src="{{ asset('storage/' . $document->ijazah) }}" width="100%" height="150px" type="application/pdf"></td>
                          <td><embed src="{{ asset('storage/' . $document->akta) }}" width="100%" height="150px" type="application/pdf"></td>
                        </tr>
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