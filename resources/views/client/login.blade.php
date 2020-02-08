@extends('client.layouts.app')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('client/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Kuy <br></strong> Jadi kontributor</h1>
                    <div class="block-17 my-4">
                            <div class="card">
                                <div class="card-header">
                                    Masuk dengan akun social media
                                </div>
                                <div class="card-body">
                                    <a href="{{route('login.redirect', 'facebook')}}" class="btn btn-primary btn-lg">Facebook <i class="fab fa-facebook"></i></a>
                                    <a href="{{route('login.redirect', 'instagram')}}" class="btn btn-primary btn-lg">Instagram <i class="fab fa-instagram"></i></a>
{{--                                    <a href="{{route('login.redirect', 'google')}}" class="btn btn-primary btn-lg">Google <i class="fab fa-google"></i></a>--}}
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
