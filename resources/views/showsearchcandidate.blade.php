<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Candidates</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="Home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="Home/css/animate.css">
    
    <link rel="stylesheet" href="Home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="Home/css/magnific-popup.css">

    <link rel="stylesheet" href="Home/css/aos.css">

    <link rel="stylesheet" href="Home/css/ionicons.min.css">

    <link rel="stylesheet" href="Home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="Home/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="Home/css/flaticon.css">
    <link rel="stylesheet" href="Home/css/icomoon.css">
    <link rel="stylesheet" href="Home/css/style.css">
  </head>
  <body>
    
	   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/home">Find Seekers</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/home" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/candidate" class="nav-link">Canditates</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
        @if(!auth()->guest())
             <li class="nav-item"><a href="/profile" class="nav-link">Profile</a></li>
              
               <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                 class="nav-link">Logout</a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                     </li>
                @if(Auth::user()->position  =='Admin' ) 
                   <li class="nav-item cta mr-md-1"><a href="/admin" class="nav-link">Admin</a></li>
               @endif
         @else
	          <li class="nav-item cta mr-md-1"><a href="/login" class="nav-link">Login</a></li>
	          <li class="nav-item cta cta-colored"><a href="/register" class="nav-link">Register</a></li>
         @endif  
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Candidates</span></p>
            <h1 class="mb-3 bread">Candidates</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
    	<div class="container">
    		<div class="row">
    		@foreach($candidatedetails as $data)
            	<div class="col-md-6">
    				<div class="team d-md-flex">
        			<div class="img" style="background-image: url(/profileimg/{{$data->profile_pic}});"></div>
        			<div class="text pl-md-4">
        				<span class="location mb-0">{{$data->Location}}</span>
        				<h2>{{$data->name}}</h2>
	        			<span class="position">{{$data->Mobile_NumberIndex}}</span>
	        			<p>{{$data->Description }}</p>
	        			<span class="seen">{{$data-> Mobile_Number}}</span>
	        			<p><a href="#" class="btn btn-primary">{{$data-> salary_per_hour }}</a></p>
        			</div>
        		</div>
    			</div>
    		@endforeach
    			
    		
    			</div>
    		
    			
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
    	</div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Faq</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
                <li><a href="#" class="py-2 d-block">Job Search</a></li>
                <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="Home/js/jquery.min.js"></script>
  <script src="Home/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="Home/js/popper.min.js"></script>
  <script src="Home/js/bootstrap.min.js"></script>
  <script src="Home/js/jquery.easing.1.3.js"></script>
  <script src="Home/js/jquery.waypoints.min.js"></script>
  <script src="Home/js/jquery.stellar.min.js"></script>
  <script src="Home/js/owl.carousel.min.js"></script>
  <script src="Home/js/jquery.magnific-popup.min.js"></script>
  <script src="Home/js/aos.js"></script>
  <script src="Home/js/jquery.animateNumber.min.js"></script>
  <script src="Home/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="Home/js/google-map.js"></script>
  <script src="Home/js/main.js"></script>
    
  </body>
</html>