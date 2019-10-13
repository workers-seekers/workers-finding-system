<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Profile/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="Profile/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="Profile/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="Profile/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="Profile/styles/responsive.css">
</head>
<body>
 @foreach($profiledata as $data)
<div class="super_container">
	
	<!-- Header -->
  <br>
 
	<header class="header">
		<div class="header_content  flex-row align-items-center justify-content-start">
			<div class="logo">{{$data->name}}<span>.</span>CV</div>
			<div class="main_nav d-flex flex-row align-items-end justify-content-start">
				
                <div class="header_button ml-auto">
				<ul class="d-flex flex-row align-items-center justify-content-start">
                   <li><a href="/home">Home</a></li>
					<li ><a href="/editprofile">Edit Profile</a></li>
					<li><a href="/changepassword">Change Password</a></li>
					
				</ul>
				</div>
			</div>
			<!-- Menu -->

		</div>
	</header>

	<div class="content_container">
		<div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- General Information -->
			<div class="general_info d-flex flex-xl-column flex-md-row flex-column">
				<div>
					<div class="general_info_image">
						<div class="background_image" style="background-image:url(/profileimg/{{$data->profile_pic}})"></div>
						<div class="header_button_2">
							<a href="#">{{$data-> catagory }}</a>
							<div class="d-flex flex-column align-items-center justify-content-center"><img src="images/download.png" alt=""></div>
						</div>
					</div>
				</div>
				<div class="general_info_content">
					<div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
						<div class="general_info_title">General Information</div>
						<ul class="general_info_list">
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="Profile/images/icon_1.png" alt=""></div>
								<div class="general_info_text">Name: <span>{{$data -> name}}</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"></div>
								<div class="general_info_text">Location: <span>{{$data->Location}}</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="Profile/images/icon_2.png" alt=""></div>
								<div class="general_info_text">Date of Birth: <span>August 25, 1991</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="Profile/images/icon_3.png" alt=""></div>
								<div class="general_info_text"><a href="mailto:{{$data->email}}">{{$data->email}}</a></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="Profile/images/icon_4.png" alt=""></div>
								<div class="general_info_text">{{$data->Mobile_Number}}</div>
							</li>
							
						</ul>

						
					</div>
				</div>
			</div>

			<!-- Main Content -->

			<div class="main_content">
				<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
					<div class="main_subtitle">{{$data->catagory}}</div>
                
					<div class="main_title">{{$data->name}}</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					<div class="about_content">
						<div class="about_title">Description</div>
						<div class="about_text">
							<p>{{$data-> Description }}</p>
						</div>

						<!-- Loaders -->

						<div class="loaders clearfix">

							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.75"></div>
								<div class="loader_content text-center">
									<div class="loader_title">intuition</div>
									<div class="loader_subtitle">Etiam nec odio vestibulum est.</div>
								</div>
							</div>
							
							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.83"></div>
								<div class="loader_content text-center">
									<div class="loader_title">creativity</div>
									<div class="loader_subtitle">Odio vestibulum est mattis.</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.25"></div>
								<div class="loader_content text-center">
									<div class="loader_title">pure luck</div>
									<div class="loader_subtitle">Vestibulum est mattis effic.</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.95"></div>
								<div class="loader_content text-center">
									<div class="loader_title">awesomeness</div>
									<div class="loader_subtitle">Vestibulum est mattis effic.</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>


	</div>

@endforeach
<script src="Profile/js/jquery-3.2.1.min.js"></script>
<script src="Profile/styles/bootstrap-4.1.2/popper.js"></script>
<script src="Profile/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="Profile/plugins/greensock/TweenMax.min.js"></script>
<script src="Profile/plugins/greensock/TimelineMax.min.js"></script>
<script src="Profile/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="Profile/plugins/greensock/animation.gsap.min.js"></script>
<script src="Profile/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="Profile/plugins/progressbar/progressbar.js"></script>
<script src="Profile/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<script src="Profile/plugins/easing/easing.js"></script>
<script src="Profile/plugins/parallax-js-master/parallax.min.js"></script>
<script src="Profile/js/custom.js"></script>
</body>
</html>