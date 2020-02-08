@extends('client.user.layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah wisata baru</h4>
              <form action="{{route('wisata.store')}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-group">
                      <label for="">Upload photo wisata</label>
                      <input type="file" class="form-control" name="file_wisata">
                  </div>
                <div class="form-group">
                    <label for="">Nama wisata</label>
                    <input type="text" class="form-control" name="nama_wisata">
                </div>
                  <div class="form-group">
                      <label for="">Tempat wisata</label>
                      <input type="text" class="form-control" name="kota_wisata">
                  </div>
                  <div class="form-group">
                      <label for="">Kategori wisata</label>
                      <select name="kategori_wisata" class="form-control">
                          <option selected disabled>-Pilih Kategori-</option>
                          @foreach($category as $data)
                              <option value="{{$data['id']}}">{{$data['name']}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="">Deskripsi wisata</label>
                      <textarea name="deskripsi_wisata" id="editor" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Kontak Hp/Telp. wisata</label>
                      <input type="text" class="form-control" name="contact_wisata">
                  </div>
                  <div class="form-group">
                      <label for="">URL website wisata</label>
                      <input type="text" class="form-control" name="url_website">
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <a href="https://www.latlong.net/">Cari Lat dan Long</a>
                      </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="">Lat</label>
                          <input type="text" class="form-control" name="lat_wisata">
                      </div>
                  </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="">Long</label>
                              <input type="text" class="form-control" name="long_wisata">
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Simpan</button>
              </form>
          </div>
        </div>
    </div>
</div>
@endsection
