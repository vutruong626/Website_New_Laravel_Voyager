@extends('frontend.master')

@section('content')
<div class="ga-top">
	<section class="gallery py-lg-5 editContent">
        <div class="container">
            <div class="title-section pt-5 text-center">
                <h2 class="tittle text-center mb-md-5 mb-4">Gallery</h2>
            </div>
        </div>
	</section>
    <div class="gal-content">
        <div class="container py-5">
			<div class="row agile_gallery_grids w3-agile demo">
				<div class="col-md-4 gal-sec">
					<div class="gallery-grid1">
						<a href="#gal1">
						<img src="images/g1.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="#gal2">
						<img src="images/g2.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="#gal3">
						<img src="images/g3.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
				</div>
				<div class="col-md-4 gal-sec">
					<div class="gallery-grid1">
						<a href="#gal4">
						<img src="images/g4.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="#gal5">
						<img src="images/g5.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="#gal6">
						<img src="images/g6.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
				</div>
				<div class="col-md-4 gal-sec">
					<div class="gallery-grid1">
						<a href="#gal7">
						<img src="images/g7.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="#gal8">
						<img src="images/g8.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
					<div class="gallery-grid1">
						<a href="#gal9">
						<img src="images/g9.jpg" alt=" " class="img-fluid">
						
						</a>
					</div>
				</div>
			</div>
		</div>
		</div>
	 
	
	
	 <!-- popup-->
        <div id="gal1" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g1.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup -->

        <!-- popup-->
        <div id="gal2" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g2.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal3" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g3.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup3 -->
        <!-- popup-->
        <div id="gal4" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g4.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal5" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g5.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal6" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g6.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup -->
  <!-- popup-->
        <div id="gal7" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g7.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup -->
		  <!-- popup-->
        <div id="gal8" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g8.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup -->
		  <!-- popup-->
        <div id="gal9" class="pop-overlay animate">
            <div class="popup">
                <img src="images/g9.jpg" alt="Popup Image" class="img-fluid">
                <p class="mt-4 editContent">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        <!-- //popup -->
	<!--//Gallery-->
	</div>

@endsection