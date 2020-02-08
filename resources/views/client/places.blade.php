@extends('client.layouts.app')

@section('content')
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Cari wisata lain</h3>
                    <form action="{{route('places.search')}}" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="search">
                        </div>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
        		</div>
          </div>
          <div class="col-lg-9">
          	<div class="row">
                @foreach($places as $data)
          		    <div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="{{route('places.detail', $data->id)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{URL::to('wisata/'.$data->gallery->path)}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="fa fa-search"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.html">{{$data->name}}</a></h3>
				    						<p class="rate">
				    							<i class="fa fa-star"></i>
				    							<i class="fa fa-star"></i>
				    							<i class="fa fa-star"></i>
				    							<i class="fa fa-star"></i>
				    							<i class="far fa-star"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
		    						</div>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> {{$data->location_city}}</span>
		    							<span class="ml-auto"><a href="{{route('places.detail', $data->id)}}">Info detail</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
                @endforeach
          	</div>
          	<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
@endsection
