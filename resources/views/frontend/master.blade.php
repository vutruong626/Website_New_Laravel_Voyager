<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>vutruong.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Voyaging a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

</script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <!-- mian-content -->

		<!-- header -->
		<header>
			<nav class="mnu navbar-light">
				<div class="logo" id="logo">
					<h1><a href="index.html">VỊNH HẠ LONG </a></h1>
				</div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
				<input type="checkbox" id="drop">
				<ul class="menu">
					<li class="mr-lg-4 mr-3 active"><a href="/">Home</a></li>
					<li class="mr-lg-4 mr-3"><a href="#news">Tin Tức</a></li>
					<li class="mr-lg-4 mr-3"><a href="">thông tin</a></li>
					<li class="mr-lg-4 mr-3"><a href="{{route('images')}}">hình ảnh</a></li>

					<li class="mr-lg-4 mr-3">
						<!-- First Tier Drop Down -->
						<label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
						<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
						<input type="checkbox" id="drop-2" />
						<ul>
							<li><a href="services.html">Services</a>
							</li>
							<li><a href="gallery.html">Gallery</a>
							</li>
						</ul>
					</li>

					<li><a href="{{route('contact')}}">Contact</a></li>
				</ul>
			</nav>
        </header>
		<!-- //header -->
                        <!-- content -->
                        @yield('content')
                        <!-- content -->

        <footer class="newsletter_right pymd-5 py-4" id="footer">
			<div class="container">
				<div class="inner-sec py-md-5 py-3">
					<div class="row mb-md-4 mb-md-3">
						<div class="col-lg-3 col-md-6 social-info text-left">
							<h3 class="tittle1 foot mb-md-5 mb-4 text-white">Get in touch</h3>
							<p>0926k 4th block building,king Avenue, </p>
							<p class="my-2"> New York City,USA</p>
							<p class="phone">phone: +0444 555 6789</p>
							<p class="phone my-2">Fax: +0444 555 6789</p>
							<p class="phone">Mail:
								<a href="mailto:info@example.com">info@example.com</a>
							</p>
						</div>
						<div class="col-lg-3 col-md-6 social-info text-left">
							<h3 class="tittle1 foot mb-md-5 mb-4 text-white">About Us</h3>
							<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus.
							Nulla porttitor accumsana tincidunt. Vestibulum ante ipsum primis tempus convallis.</p>
						</div>
						<div class="col-lg-6 col-md-12 n-right tex-left">
							<h3 class="tittle1 foot mb-md-5 mb-4 text-white">Subscribe our Newsletter</h3>
							<form action="#" method="post">
								<div class="form-group d-flex">
									<input class="form-control" type="email" name="Email" placeholder=" Email Address" required="">
									<button class="form-control submit text-uppercase" type="submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright py-3">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<p class="copy-right mt-2">© 2019 Voyaging. All Rights Reserved | Design by
							<a href="http://w3layouts.com/"> W3layouts </a>
						</p>
					</div>
					<div class="col-md-4">
						<ul class="social-icons scial justify-content-end">
							<li class="mr-1"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="mx-1"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="mx-1"><a href="#"><span class="fa fa-google-plus"></span></a></li>
							<li class="mx-1"><a href="#"><span class="fa fa-linkedin"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--//newsletter-->
	</body>
</html>
