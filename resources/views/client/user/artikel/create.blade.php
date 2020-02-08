@extends('client.user.layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah wisata baru</h4>
              @if($errors->any())
                  @foreach($errors->all() as $error)
                      <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <strong>{{$error}}</strong>
                      </div>
                  @endforeach
              @endif
              <form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-group">
                      <label for="">Judul</label>
                      <input type="text" class="form-control" name="judul">
                  </div>
                  <div class="form-group">
                      <label for="">Isi artikel</label>
                      <textarea name="isi" id="editor" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Simpan</button>
              </form>
          </div>
        </div>
    </div>
</div>
@endsection
