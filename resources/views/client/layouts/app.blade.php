<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KuyDolan - Cari informasi tempat petualanganmu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="dicoding:email" content="bangadam.dev@gmail.com">

    @include('client.layouts.css')

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">Kuy<span style="color: #FE936C!important;">Dolan</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{route("login")}}" class="nav-link">Kontribusi</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Kuy<span style="color: #FE936C!important;">Dolan</span></h2>
              <p>
                KuyDolan merupakan platform website yang menyediakan berbagai hal informasi mengenai seputar tempat wisata di indonesia, tak hanya itu kamu juga bisa berbagi cerita/informasi mengenai tempat wisata yang ada di kotamu.
              </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#!"><span class="fab fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#!"><span class="fab fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informasi</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Kontribusi</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ada pertanyaan ?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Malang</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 857 3227 6465</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">bangadam.dev@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>



  @include('client.layouts.js')

  </body>
</html>
