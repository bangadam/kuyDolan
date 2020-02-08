@extends('client.layouts.app')

@section('content')
	<div class="hero-wrap js-fullheight" style="background-image: url('client/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Mulai <br></strong> petualanganmu dari sini</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
            <div class="block-17 my-4">
              <form action="{{route('places.search')}}" method="get" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                    <input type="text" class="form-control" placeholder="Ex: Pantai tiga warna, Bromo, Alun-alun kota malang" name="search">
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Cari">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="fa fa-info-circle"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Informasi tentang tempat wisata</h3>
                <p>Kamu akan mendapat informasi seputar tempat wisata yang kamu cari</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="fa fa-map-marked-alt"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Top Dolan</h3>
                <p>Kamu akan disuguhkan dengan tempat-tempat wisata terbaik</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="fa fa-star"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Top Kontributor</h3>
                <p>Rekomendasi tempat-tempat wisata dari kontributor terbaik</p>
              </div>
            </div>
          </div>
          </div>
        </div>
    </section>

    <section class="ftco-section ftco-destination">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4"><strong>Tempat Wisata</strong> Pilihan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="destination-slider owl-carousel ftco-animate">
                @foreach($places as $data)
                  <div class="item">
                    <div class="destination">
                      <a href="{{route('places.detail', $data->id)}}" class="img d-flex justify-content-center align-items-center" style="background-image: url(wisata/{{$data->gallery->path}});">
                        <div class="icon d-flex justify-content-center align-items-center">
                          <span class="fa fa-search"></span>
                        </div>
                      </a>
                      <div class="text p-3">
                        <h3><a href="#">{{$data->name}}</a></h3>
                        <span class="listing">{{$data->category->name}}</span>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(client/images/bg_1.jpg);">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Fakta tentang KuyDolan</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="{{$wisata}}">0</strong>
                    <span>Wisata pilihan</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="{{$kontributor}}">0</strong>
                    <span>Kontributor</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
            <h2 class="mb-4 pb-3">Apa itu <strong>KuyDolan</strong> ?</h2>
            <p>KuyDolan merupakan platform website yang menyediakan berbagai hal informasi mengenai seputar tempat wisata di indonesia, tak hanya itu kamu juga bisa berbagi informasi mengenai tempat wisata yang ada di kotamu.</p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 headfing-section ftco-animate">
            <h2 class="mb-4 pb-3">Apa kata <strong>mereka</strong> ?</h2>
            <div class="row ftco-animate">
              <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div class="user-img mb-5" style="background-image: url(client/images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">Keren, disini saya banyak tahu hal mengenai tempat-tempat wisata yang sebelumnya belum terlalu terkenal di indonesia</p>
                        <p class="name">Dennis Green</p>
                        <span class="position">Traveller</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div class="user-img mb-5" style="background-image: url(client/images/person_2.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">Keren, disini saya banyak tahu hal mengenai tempat-tempat wisata indah yang sebelumnya belum terlalu terkenal di indonesia</p>
                        <p class="name">John Doe</p>
                        <span class="position">Pro Climber</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div class="user-img mb-5" style="background-image: url(client/images/person_3.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">Keren, disini saya banyak tahu hal mengenai tempat-tempat wisata yang sebelumnya belum terlalu terkenal di indonesia</p>
                        <p class="name">Ucok</p>
                        <span class="position">Traveller</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2><strong>Tips</strong> &amp; Artikel</h2>
          </div>
        </div>
        <div class="row d-flex">
            @foreach($artikel as $data)
                  <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                      <div class="text p-4 d-block">
                        <span class="tag">Tips, Travel</span>
                        <h3 class="heading mt-3"><a href="#">{{$data->title}}</a></h3>
                        <div class="meta mb-3">
                          <div><a href="#">{{$data->created_at->format('F d, Y')}}</a></div>
                          <div><a href="#" style="color: #fe936c">{{$data->user->name}}</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
        </div>
      </div>
    </section>
@endsection
