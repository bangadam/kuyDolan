@extends('client.user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Selamat datang kembali, {{auth()->user()->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 stretch-card">
            <div class="card">
              <div class="card-body" style="text-align: center">
                <h4 class="card-title">Tempat Wisata yang sudah kamu bagikan</h4>
                <h1>{{$wisata}}</h1>
              </div>
            </div>
        </div>
        <div class="col-md-6 stretch-card">
            <div class="card">
                <div class="card-body" style="text-align: center">
                    <h4 class="card-title">Artikel & Tips yang sudah kamu tulis</h4>
                    <h1>{{$artikel}}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
