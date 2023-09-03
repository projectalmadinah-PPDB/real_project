@extends('pages.admin.dashboard.layouts.parent')

@section('title','Biodata Document')

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
                  <div>
                    <label for="">Kartu Keluarga</label>
                    <object data="{{ asset('storage/' . $document->kk) }}" type="application/pdf" width="100%" height="600px">
                      <p>Maaf, browser Anda tidak mendukung tampilan PDF. Anda bisa <a href="{{ asset('storage/' . $document->kk) }}" target="_blank">mengunduh file PDF</a> sebagai alternatif.</p>
                  </object>
                  </div>
                  <div>
                    <label for="">Ijazah</label>
                    <object data="{{ asset('storage/' . $document->ijazah) }}" type="application/pdf" width="100%" height="600px">
                      <p>Maaf, browser Anda tidak mendukung tampilan PDF. Anda bisa <a href="{{ asset('storage/' . $document->ijazah) }}" target="_blank">mengunduh file PDF</a> sebagai alternatif.</p>
                  </object>
                  </div>
                  <div>
                    <label for="">Akte Kelahiran</label>
                    <object data="{{ asset('storage/' . $document->akta) }}" type="application/pdf" width="100%" height="600px">
                      <p>Maaf, browser Anda tidak mendukung tampilan PDF. Anda bisa <a href="{{ asset('storage/' . $document->akta) }}" target="_blank">mengunduh file PDF</a> sebagai alternatif.</p>
                  </object>
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