@extends('client.layouts.app')

@section('content')
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Kontributor wisata</h3>
                    <div style="text-align: center">
                    <img src="{{$places->user->photo != null ? $places->user->photo : 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRmIrBN8hLnUOoGdfVJAPkNE2JLP2BP08ISR2UEZpnvXRsrsAAm'}}" alt="" class="rounded-circle" width="170px">
                        </div>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item">Nama : <b>{{$places->user->name}}</b></li>
                        <li class="list-group-item">Email : <b>{{$places->user->email}}</b></li>
                    </ul>
				</div>

          </div>
          <div class="col-lg-9">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="hotel-img" style="background-image: url({{URL::to('wisata/'.$places->gallery->path)}});"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
          			<span>{{$places->category->name}}</span>
          			<h2>{{$places->name}}</h2>
          			<p class="rate mb-5">
          				<span class="loc"><a href="#"><i class="icon-map"></i> {{$places->location_city}}</a></span>
          				<span class="star">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    							8 Rating</span>
    						</p>
    						<p>
                                {!! $places->description !!}
                            </p>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Map wisata</h4>
          			<div class="block-16">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0846498631004!2d{{$places->long}}!3d{{$places->lat}}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7873a1c57a9775%3A0xa6fa81f6d495df47!2sKingboar%20Cafe!5e0!3m2!1sid!2sid!4v1576296506969!5m2!1sid!2sid" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		            </div>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">Wisata terkait lainnya</h4>
          			<div class="row">
                        @foreach($otherPlaces as $data)
          				    <div class="col-md-4">
				    				<div class="destination">
				    					<a href="hotel-single.html" class="img img-2" style="background-image: url({{URL::to('wisata/'.$data->gallery->path)}});"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="hotel-single.html">{{$data->name}}</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 Rating</span>
						    						</p>
					    						</div>
				    						</div>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><i class="icon-map-o"></i> {{$data->location_city}}</span>
				    							<span class="ml-auto"><a href="#">Info Detail</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
                        @endforeach
          			</div>
          		</div>

          	</div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
@endsection
