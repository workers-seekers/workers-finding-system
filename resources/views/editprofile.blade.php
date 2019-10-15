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
 @foreach($editprodata as $data)
<div class="super_container">
	
	<!-- Header -->
  <br>
 
	<header class="header">
		<div class="header_content  flex-row align-items-center justify-content-start">
			<div class="logo">Update<span>.</span>CV</div>
		
			<!-- Menu -->

		</div>
	</header>

	<div class="content_container">
		<div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- General Information -->

  
      @csrf
			<div class="general_info flex-xl-column flex-md-row flex-column">
				<div>
        
        <form action ="{{url('/uploadfile')}}" enctype="multipart/form-data" method="post">
          {{ csrf_field() }}
					<div class="general_info_image">
						<div class="background_image" style="background-image:url(/profileimg/{{$data->profile_pic}})"></div>
					   
					</div>
          <br>

          <input type="file" name="select_file" />
             <input type="submit" name="upload" class="btn btn-primary" value="Upload">
           </form>
           @if (count($errors) > 0)
						<div class="alert alert-danger">
							Upload Validation Error<br><br>
							<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
							</ul>
						</div>
						@endif
						@if ($message = Session::get('success'))
						<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>{{ $message }}</strong>
						</div>
					@endif
				</div>
			    
			</div>
    
			<!-- Main Content -->

			<div class="main_content">
			
				<div class="main_content_scroll " data-mcs-theme="minimal-dark">
					<div class="about_content">
                   
                    <form action ="editprodatasave" method="post">
				             		@csrf
                         <div class="">Name : </div>
                          <input class="form-control" type="text"  value="{{$data->name}}" name="name"/>
                          
                          <br> 


                         <div class="">Email : </div>
                          <input class="form-control" type="text"   value="{{$data->email}}" name="email"/>
                          <br>

                          <div class="">NIC : </div>
                          <input class="form-control" type="text"   value="{{$data->NIC}}" name="nic"/>
                          <br>

                          <div class=""> Salary per hour	  : </div>
                          <input class="form-control" type="text"   value="{{$data->salary_per_hour}}" name="salary_per_hour"/>
                          <br>

                          <div class="">Mobile Number : </div>
                          <input class="form-control" type="text"   value="{{$data->Mobile_Number}}" name="mobile_number"/>
                          <br>
                         
                         <div class="">Location : </div>
                            <select  type="text" value="{{$data->Location}}" name = "location" class="form-control" required>
                                      <option >Ampara</option>
                                      <option>Anuradhapura</option>
                                      <option>Badulla</option>
                                      <option>Batticaloa</option>
                                      <option>Colombo</option>
                                      <option>Galle</option>
                                      <option>Gampaha</option>
                                      <option>Hambantota</option>
                                      <option>Jaffna</option>
                                      <option>Kalutara</option>
                                      <option>Kandy</option>
                                      <option>Kegalle</option>
                                      <option>Kilinochchi</option>
                                      <option>Kurunegala</option>
                                      <option>Mannar</option>
                                      <option>Matale</option>
                                      <option>Matara</option>
                                      <option>Monaragala</option>
                                      <option>Mullativu</option>
                                      <option>Nuwara Eliya</option>
                                      <option>Polonnaruwa</option>
                                      <option>Puttalam</option>
                                      <option>Ratnapura</option>
                                      <option>Trincomalee</option>
                                      <option>Vavuniya</option>
                                   </select>
                         <br>  
                         <div class="">Catagary : </div>
                            <select  type="text" value="{{$data->catagory}}" name = "catagory" class="form-control" required>
                                <option >Meson</option>
                                <option>Carpentor</option>
                                <option>Teacher</option>
                                <option>bas</option> 
                            </select>
	                     <br>
                        <div class="">Description : </div>
                         <textarea class="form-control" name="Description"  >{{$data->Description}}</textarea>
                        <br>
                  
                         <button class="btn btn-success" type="submit">Save Changes</button>

                    </form>
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