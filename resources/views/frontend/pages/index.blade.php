@extends('frontend.master')


@section('content')

<div id="popup_link" style="display:none;">
       <img src="http://www.shopsinhvienonline.com/images/1542626538_SH.jpg" />
</div>

<link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
<script src="{{ asset('js/fancybox.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
		$.fancybox("#popup_link");
});
</script>


@foreach($slider as $item_slider)
	<div class="header-top" class="mian-content" style="background-image:url({{asset('storage/'.$item_slider->image)}});background-repeat:no-repeat;background-size:cover;">
		<!-- /banner-info-->
		<div class="banner-content text-center text-white">
			<h4 class="text-uppercase"> Lorem Ipsum is simply dummy</h4>
			<h3>Enjoy Your Holiday Trip</h3>
			<div class="banner-high-lights text-center">
				<div class="ban-text text-center py-3">
					<p class="text-uppercase pb-2 text-white"> Lorem ipsum dolor sit amet consectetur elit</p>
						<h5 class="ban-text">Lorem ipsum dolor sit amet consectetur elit</h5>
				</div>
			</div>
		</div>
		<!-- //banner-info-->
	</div>
		<!-- //header-top-->
@endforeach
		<!-- //mian-content-->
		<!-- /advantage -->
		<section class="banner-bottom py-lg-5 py-md-5 py-3" id="services">
			<div class="container">
				<div class="inner-sec py-lg-5 py-3">
					<h2 class="tittle text-center mb-md-5 mb-4">Welcome</h2>
					@foreach($news as $item_news)
					<div class="row middle-grids pt-lg-5" id="news">
						<div class="col-lg-6 advantage-grid-info pt-md-5">
							<div class="advantage_left">
								<!-- <h4 class="mb-2"></h4> -->
								<h3>{{$item_news->name}}</h3>
								<p class="mt-2" style="height: 138px; overflow-y: hidden;">{{$item_news->title}}</p>
							</div>
						</div>
						<div class="col-lg-6 advantage-grid-info1">
							<div class="advantage_left1 text-center">
								<img src="{{asset('storage/'.$item_news->image)}}" class="img-fluid" alt="">
							</div>
						</div>
					</div>
					@endforeach
						<!-- dhjvgjaskjsbd -->
					@foreach($news_righ as $item_news_righ)
					<div class="row middle-grids pt-lg-5" id="information">

						<div class="col-lg-6 advantage-grid-info1">
							<div class="advantage_left1 text-center">
								<img src="{{asset('storage/'.$item_news_righ->image)}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 advantage-grid-info pt-md-5">
							<div class="advantage_left">
								<h4 class="mb-2">Integer porttitor mollisar</h4>
								<h3>{{$item_news_righ->name}}</h3>
								<p class="mt-2" style="height: 138px; overflow-y: hidden;">{{$item_news_righ->title}}</p>
							</div>
						</div>
					</div>
					@endforeach
					<div class="row middle-grids pt-lg-5">
						<div class="col-lg-6 advantage-grid-info pt-md-5">
							<div class="advantage_left">
								<h4 class="mb-2">Integer porttitor mollisar</h4>
								<h3>Non laoreet eleifend</h3>
								<p class="mt-2">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.</p>
							</div>
						</div>
						<div class="col-lg-6 advantage-grid-info1">
							<div class="advantage_left1 text-center">
								<img src="{{asset('images/h3.jpg')}}" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //advantage -->
		<!--/testimonials-->
		<section class="clients py-md-5 py-3" id="clients">
			<div class="container">
				<div class="inner-sec py-md-5 py-3">
					<h3 class="tittle text-center mb-md-5 mb-4">Our Clients</h3>
					<div class="row">
						<div class="col-md-6 item">
							<div class="feedback-info text-left">
								<div class="feedback-top">

									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.</p>
								</div>
								<div class="feedback-grids">

									<div class="feedback-img-info">
										<h5>Roger Barrett</h5>
										<p>Manager, Chicago </p>
									</div>
									<div class="feedback-img">
										<img src="{{asset('images/ts1.jpg')}}" class="img-fluid rounded-circle" alt="" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-6 item">
							<div class="feedback-info text-left">

								<div class="feedback-top">

									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.</p>
								</div>
								<div class="feedback-grids">

									<div class="feedback-img-info">
										<h5>Roger Barrett</h5>
										<p>Manager, Chicago </p>
									</div>
									<div class="feedback-img">
										<img src="{{asset('images/ts3.jpg')}}" class="img-fluid rounded-circle" alt="" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--//testimonials-->
		<!-- /services -->
		<section class="banner-bottom py-lg-5 py-md-5 py-3" id="services">
			<div class="container">
				<div class="inner-sec py-lg-5 py-3">
					<h3 class="tittle text-center mb-md-5 mb-4">Traveling Types</h3>
					<div class="row middle-grids pt-lg-5">
						<div class="col-lg-3 about-in middle-grid-info text-center">
							<div class="card">
								<div class="card-body">
									<span class="fa fa-car mb-2"></span>
									<h5 class="card-title text-uppercase my-3">
									Travel by Car</h5>
									<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 about-in middle-grid-info text-center">
							<div class="card">
								<div class="card-body">
									<span class="fa fa-bus mb-2"></span>
									<h5 class="card-title text-uppercase my-3">Travel by Bus</h5>
									<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 about-in middle-grid-info text-center">
							<div class="card">
								<div class="card-body">
									<span class="fa fa-map-marker mb-2"></span>
									<h5 class="card-title text-uppercase my-3"> Locations</h5>
									<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 about-in middle-grid-info active text-center">
							<div class="card">
								<div class="card-body">
									<span class="fa fa-plane mb-2"></span>
									<h5 class="card-title text-uppercase my-3">Travel by Plane</h5>
									<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //services -->
		<!-- choose -->
		<section class="choose py-5">
			<div class="container py-md-4 mt-md-3">
				<div class="row inner_w3l_agile_grids-1 ">
					<div class="col-lg-7 w3layouts_choose_left_grid1">
						<div class="choose_top">
							<h3 class="w3l_header text-white">Still Have Questions?</h3>
							<h4 class="mb-3 mt-3 text-white">Feel Free to Contact Our Agents Directly</h4>
							<p class="text-white">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.</p>
							<a href="#" class="btn btn-primary mt-3">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //choose -->
		<!-- stats -->
		<section class="stat_w3l py-5">
			<div class="container">
				<div class="row py-lg-5 stats-con">
					<div class="col-sm-3 col-6 stats_info counter_grid">
						<span class="fa fa-briefcase"></span>
						<p class="counter">16</p>
						<h4>Years of Experience</h4>
					</div>
					<div class="col-sm-3 col-6 stats_info counter_grid1">
						<span class="fa fa-user"></span>
						<p class="counter">230</p>
						<h4>Our Agents</h4>
					</div>
					<div class="col-sm-3 col-6 stats_info counter_grid">
						<span class="fa fa-smile-o"></span>
						<p class="counter">110</p>
						<h4>Happy Customers</h4>
					</div>
					<div class="col-sm-3 col-6 stats_info counter_grid2">
						<span class="fa fa-users"></span>
						<p class="counter">1045</p>
						<h4>Clients</h4>
					</div>
				</div>
			</div>
		</section>
		<!-- //stats -->

@endsection
