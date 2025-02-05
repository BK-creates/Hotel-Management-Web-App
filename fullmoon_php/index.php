<?php session_start(); 
error_reporting(0);
$username = $_SESSION['username'];
	if($_SESSION['msg'] == "Registered"):
		?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<title> 𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝</title>
	<!-- favicon-->
	<link href="favicon.jpg" rel="icon">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- boostrap 5 cdn-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- sweet alert -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	
	
	<!-- css file and icons stylesheet-->

    <link rel="stylesheet" href="style.css">    
    <!--<link rel="stylesheet" href="responsive.css">-->
    <link rel="stylesheet" href="custom.css">
	<!--<label rel="stylesheet" href="baguetteBox.min.css">-->
	<link rel="stylesheet" href="font-awesome.min.css">   
	<link rel="stylesheet" href="animate.css">   
	<link rel="stylesheet" href="superslides.css">
	<link rel="stylesheet" href="fontgoogle.css">
	<link rel="stylesheet" href="classic.css">
	<link rel="stylesheet" href="classic.date.css">
	<link rel="stylesheet" href="classic.time.css">
	<link rel="stylesheet" href="fontawesome-webfont.eot">
	<link rel="stylesheet" href="fontawesome-webfont.svg">
	<link rel="stylesheet" type="text/css"href="signup.css">
	
	<style>
		.swal-title{
			font-size: 12px;
		}
		#logout i{
			font-size: 19px;
		}
		#bg{
			-webkit-filter: blur(4px);
			filter: blur(4px);
		}

	</style>
	
</head>



<body>
	<script>
		 $(document).ready(function(){
			
		 var alert = "<?php echo $_SESSION['alert']; ?>"
		 if(alert == "Login!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Login Successfully!',
                      showConfirmButton: false,
                      timer: 1000})
		};
		if(alert == "Room reserved successfully!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Room reserved successfully!',
                      showConfirmButton: false,
                      timer: 1000})
		};
		if(alert == "Successfully Sign up!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Successfully Signed up!',
                      showConfirmButton: false,
                      timer: 1000})
		};
		if(alert == "Room booked!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Room booked Successfully<br><br><span style="color:red;">5 wallets points are added<br><br>to your account!</span>',
                      showConfirmButton: false,
                      timer: 3000})
		};
		if(alert == "Table booked!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Table booked Successfully!<br><br><span style="color:red;">2 wallets points are added<br><br>to your account!',
                      showConfirmButton: false,
                      timer: 3000})
		};
		$("#logout").click(function(){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Logout successfully',
                      showConfirmButton: false,
                      timer: 1000}).then(function(){
						window.location.href = "logout.php";
					  })
					  
		})
		});  
		<?php unset($_SESSION['alert']); ?>
		
		
		
	</script>
	 
<!--========= Start Header=========-->
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="logo.png1S" alt=""/>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aris-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<!-- Navigation Menu bar -->
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="menu/menu.html" target="_blank">Menu</a>
	</li>
					<!--Drop Menu -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Reservation</a>
						<!--Drop-->
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
							
							<form action="form.php" method="post">
							<input class="nav-link" type="submit" name="table" value="Room reservation"/>
							</form>

							<form action="form.php" method="post">
							<input class="nav-link" type="submit" name="room" value="Table reservation"/>
							</form>

							
							  <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#bookings">My bookings</a>
							
						
							
						</div>
					</li>

					<li class="nav-item">
					<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#wallet">wallet points</a>
					</li>

					

					


					
					
					<li class="nav-item dropdown" id="an" style="display:block;">
					<a class="nav-link dropdown-toggle" id="dropdown-b" data-toggle="dropdown" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a>						<!--Drop-->
						<div class="dropdown-menu" aria-labelledby="dropdown-b">
							<a class="dropdown-item" href="#"><?php echo $_SESSION['username']; ?></a>
							
							
							<a  class="dropdown-item"  id="logout">Logout <i class="bi bi-box-arrow-in-left"></i></a>
						</div>
					</li>
					

				</ul>
			</div>
		</div>
	</nav>
</header><!--End Header-->
<?php
 $conn = new mysqli("localhost","root","","fullmoon");
 $sql5 = "select * from desk where Username='$username'";
 $res5 = mysqli_query($conn,$sql5);
 $scount = mysqli_num_rows($res5);
 $srow = mysqli_fetch_assoc($res5);
 $sql6 = "select * from room where Username='$username'";
 $res6 = mysqli_query($conn,$sql6);
 $scount6 = mysqli_num_rows($res6);
 $srow6 = mysqli_fetch_assoc($res6);
 $sql7 = "select * from room where Username='$username' and Status='Booked'";
 $res7 = mysqli_query($conn,$sql7);
 $scount7 = mysqli_num_rows($res7);
 $sql8 = "select * from desk where Username='$username' and Status='Booked'";
 $res8 = mysqli_query($conn,$sql8);
 $scount8 = mysqli_num_rows($res8);
 $srow8 = mysqli_fetch_assoc($res8);
 $a1 = "select * from wallet where Username='$username'";
 $aa1 = mysqli_query($conn,$a1);
 $ab1 = mysqli_num_rows($aa1);
 $ac1 = mysqli_fetch_assoc($aa1);
 
 if( $ab1>0){
	$points = $ac1['Points'];
	while($roww2 = mysqli_fetch_assoc($aa1)){
		$points = $points + $roww2['Points'];
	 }
 }
 else{
	$points = 0;
 }
 
?>

<!-- Modal for wallet -->
<div class="modal fade" id="wallet"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Wallet points</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body" style="text-align:center;">
						<h3 style="text-align:center;">Wallet Points - <span style="color:red"><?php echo $points; ?></span></h3>
							</div>
						
						
						</div>
					</div>
					</div>
					<!-- Modal -->

<!-- Modal for booking -->
<div class="modal fade" id="bookings"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">My bookings</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body" style="text-align:center;">
						<?php
						if($scount == 0 && $scount6 == 0):
						?>
						
							<h3 style="text-align:center;color:red;">No bookings!</h3>
							
						
						<?php else: ?>
							<?php if($scount > 0): ?>
								<h3 style="text-align:center;color:red;"><?php echo $scount; ?> Table booked!</h3>
								<h4>Table No: <span style="color:red;"><?php echo $srow8['Table_No']; ?></span></h4>	
								<?php while($abb = mysqli_fetch_assoc($res8)){ ?>					
							<h4>Table No: <span style="color:red;"><?php echo $abb['Table_No']; ?></span></h4>	
							<?php }  ?>
								<?php endif;?>

								<?php if($scount6 > 0): ?>
									<h3 style="text-align:center;color:red;"><?php echo $scount6; ?> Room booked!</h3>	
									<?php while($srow7 = mysqli_fetch_assoc($res7)){ ?>	
										<h4>Room No: <span style="color:red;"><?php echo $srow7['Room_No']; ?></span></h4>
										<?php }  ?>
							

									<?php endif;?>

													
						   
							<?php endif;?>
							</div>
						
						
						</div>
					</div>
					</div>
					<!-- Modal -->

<!-- Table reservation>
 <div class="modal fade" id="exampleModal3" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Table reservation</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  < sign up form >
		  

		  <form action="room.php" method="POST" style="border:1px solid #ccc">
			<div class="container">
			  <h1>Table Reservation</h1>
			  <p>Please fill in this form to reserve a table.</p>
			  <hr>
		  
			  <label for="date"><b>Date</b></label>
			  <input type="date"  name="date" required>
		  
			  <label for="time"><b>Time</b></label>
			  <input type="time"  name="time" required>
		  
			  <label for="members"><b>How many members</b></label>
			  <input type="text" placeholder="Ex: 4" name="members" required>
			  
			  <label for="adult"><b>Adult</b></label>
			  <input type="text" placeholder="Ex: 2" name="adult" required>

			  <label for="child"><b>Children</b></label>
			  <input type="text" placeholder="Ex: 2"  name="child" required>
		  		 	  
			  <div class="clearfix">
				<button type="submit" name="submit1" id="submit1" class="signupbtn"  >Sign Up</button>
			  </div>
			</div>
		  </form>
		</div>
		
	  </div>
	</div>
  </div> -->

  




<!--=========Slider section =========-->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-left">
			<img src="slider-01.jpg" alt="" id="bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> 𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝 Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
						trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="slider-02.jpg" alt="" id="bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> 𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝 Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
						trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="slider-03.jpg" alt="" id="bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> 𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝 Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
						trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="bi bi-arrow-right-circle"></i></a>
		<a href="#" class="prev"><i class="bi bi-arrow-left-circle"></i></a>
	</div>
</div><!-- End slider Section-->

<!--===========About Section===========-->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Welcome To <span>Live Dinner Restaurent</span></h1>
					<h4>Little Story</h4>
					<p>The customer is very important, the customer will be followed by the customer. Feugiat is the author of the children. As at the children before, but the bow of the valley. No facilis, eros in eleifend mourning, hatred in front of the members of the propaganda, he needed lacinia bed and salad.</p>
					<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
					<a class="btn btn-lg-btn-circle btn-outline-new-white" href="#">Reservation</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12"><img src="about-img.jpg" alt="" class="img-fluid"></div>
		</div>
	</div>
</div><!-- End Section -->
<!--============Start QT Section===========-->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<p class="lead">" If you're not the one cooking, stay out of the way and compliment the chif, "</p>
				<span class="lead">Shantanu jana</span>
			</div>
		</div>
	</div>
</div>
<!-- End section-->

<!--===========Start Gallery========-->
<div class="gallery-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Gallery</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat.</p>

				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-01.jpg">
					<img class="img-fluid" src="gallery-img-01.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-02.jpg">
					<img class="img-fluid" src="gallery-img-02.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-03.jpg">
					<img class="img-fluid" src="gallery-img-03.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-04.jpg">
					<img class="img-fluid" src="gallery-img-04.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-05.jpg">
					<img class="img-fluid" src="gallery-img-05.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-06.jpg">
					<img class="img-fluid" src="gallery-img-06.jpg" alt="Gallery Images">
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!--End gallery -->

<!--========== Customer Reviews==========-->
<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Customer Reviews</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<div class="carousel-item text-center active">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">𝔸𝕕𝕙𝕚𝕥𝕙𝕪𝕒 𝕊</strong></h5>
							<h6 class="text-dark m-0">Web Developer</h6>
							<p class="m-0 pt-3">The customer is very important, the customer will be followed by the customer. For I was at the time, more varied than at, the grief of God. The great fear of the great man, the devil, nor the ugly man, is always expected before. So drink chocolate not pure. The casino does not charge a lot of money.</p>
						</div>
						<div class="carousel-item text-center">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">𝙱𝙰𝚁𝙰𝚃𝙷 𝙺𝚄𝙼𝙰𝚁 𝚂</strong></h5>
							<h6 class="text-dark m-0">Web Designer</h6>
							<p class="m-0 pt-3">The customer is very important, the customer will be followed by the customer. For I was at the time, more varied than at, the grief of God. The great fear of the great man, the devil, nor the ugly man, is always expected before. So drink chocolate not pure. The casino does not charge a lot of money.</p>
						</div>
						<div class="carousel-item text-center">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">𝔸𝕟𝕕𝕣𝕖𝕨 𝕊𝕚𝕞𝕠𝕟</strong></h5>
							<h6 class="text-dark m-0">Seo Analyst</h6>
							<p class="m-0 pt-3">The customer is very important, the customer will be followed by the customer. For I was at the time, more varied than at, the grief of God. The great fear of the great man, the devil, nor the ugly man, is always expected before. So drink chocolate not pure. The casino does not charge a lot of money.</p>
					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!---------====================== Contact Section ================----------->
<div class="contact-imfo-box">
	<div class="container">
		<div class="row">
			<div class="col-md-4 ">
			<i class="bi bi-phone-fill"></i>
				<div class="overflow-hidden">
					<h4>Phone</h4>
					<p class="lead"> +91 3243 4566 45</p>
				</div>
			</div>
			<div class="col-md-4 ">
			<i class="bi bi-envelope-fill"></i>
				<div class="overflow-hidden">
					<h4>Email</h4>
					<p class="lead">yourmail@gmail.com</p>
				</div>
			</div>
			<div class="col-md-4">
			<i class="bi bi-geo-alt-fill"></i>
				<div class="overflow-hidden">
					<h4>Location</h4>
					<p class="lead">100, Rajiv Gandhi chennai</p>
				</div>
			</div>
		</div>
	</div>
</div><!--======= End Contact Section ========--->

<!--=========== Footer Section ==========-->
<footer class="footer-area bg-f">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<h3>About Us</h3>
				<p>The Grand Presidential Suite at 
					@𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝
					 pays a fitting tribute to the designs of Sir Edwin Lutyens. An effortless blend of grandeur & elegance, this suite has hosted many delecious foods.</p>
			</div>
			<div class="col-lg-3 col-md-6">
				
				<ul class="list-inline f-social">
					<li class="list-inline-item"><a href="#"><i class="bi bi-facebook"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="bi bi-twitter"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="bi bi-google"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="bi bi-instagram"></i></a></li>
				</ul>
			</div>
			<div id="col-lg-3 col-md-6">
				<h3>Contact information</h3>
				<p class="lead">OMR Street, High Tower, MO, Chennai, 0000001</p>
				<p class="lead"><a href="#">+91 2000 800 9999</a></p>
				<p><a href="#"> info@admin.com</a></p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3>Opening hours</h3>
				<p><span class="text-color">Monday: </span>Closed</p>
				<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
				<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
				<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
			</div>
		</div>
	</div>	

	<!--copyright-->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="company-name">All Rights Reserved. &copy; 2022 <a href="#"><span>𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝  Restaurent</span></a>   Design By : <a href="#"><span> 𝔸𝟚𝕓</span></a></p>
				</div>
			</div>
		</div>
	</div>
</footer>


<!--============ Back to Top ============-->
<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="bi bi-arrow-up-circle"></i></a>

		<?php
		else:
		?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<title> 𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝</title>
	<!-- favicon-->
	<link href="favicon.jpg" rel="icon">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- boostrap 5 cdn-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- sweet alert -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	
	
	<!-- css file and icons stylesheet-->

    <link rel="stylesheet" href="style.css">    
    <!--<link rel="stylesheet" href="responsive.css">-->
    <link rel="stylesheet" href="custom.css">
	<!--<label rel="stylesheet" href="baguetteBox.min.css">-->
	<link rel="stylesheet" href="font-awesome.min.css">   
	<link rel="stylesheet" href="animate.css">   
	<link rel="stylesheet" href="superslides.css">
	<link rel="stylesheet" href="fontgoogle.css">
	<link rel="stylesheet" href="classic.css">
	<link rel="stylesheet" href="classic.date.css">
	<link rel="stylesheet" href="classic.time.css">
	<link rel="stylesheet" href="fontawesome-webfont.eot">
	<link rel="stylesheet" href="fontawesome-webfont.svg">
	
	<style>
		.swal-title{
			font-size: 12px;
		}
		#na a i{
			font-size:20px;	
		}
		#na1 a i{
			font-size:20px;	
		}
		#opa{
			opacity: 0.80;
		}
		
	</style>
	
	
</head>



<body>
	<script>
		$(document).ready(function(){
			var alert = "<?php echo $_SESSION['alert']; ?>"
		 if(alert == "Mobile exists!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Already <span style="color: red;">Mobile</span> was exists try different!',
                      showConfirmButton: false,
                      timer: 2500})
		};
		if(alert == "Email exists!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Already <span style="color: red;">Email</span> was exists try different!',
                      showConfirmButton: false,
                      timer: 2500})
		};
		if(alert == "Check your password!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Please check your <span style="color:red;">password</span>',
                      showConfirmButton: false,
                      timer: 2500})
		};
		if(alert == "Check your username!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Please check your <span style="color:red;">username</span>',
                      showConfirmButton: false,
                      timer: 2500})
		};
		if(alert == "Username exists!"){
			Swal.fire({customClass: 'swal-title',
                      position: 'top',
                      title: 'Already <span style="color: red;">Username</span> was exists try Signin!',
                      showConfirmButton: false,
                      timer: 2500})
		};
		
		});
		<?php  unset($_SESSION['alert']); ?>
		
		
	</script>
	 
<!--========= Start Header=========-->
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="logo.png1S" alt=""/>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aris-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<!-- Navigation Menu bar -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="menu/menu.html" target="_blank">Menu</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#col-lg-3 col-md-6">About</a>
					</li>
					
					
					<li class="nav-item"><a class="nav-link" href="blog.html" target="_blank">Blog</a></li>
					<li class="nav-item" id="na" style="display:block;"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:	20em ; font-weight: bold;">Sign In <i class="bi bi-box-arrow-in-right"></i></a></li>
					<li class="nav-item" id="na1" style="display:block;"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#" style="font-weight:bold ;" >Sign Up <i class="bi bi-person-plus-fill"></i></a></li>
					
					

				</ul>
			</div>
		</div>
	</nav>
</header><!--End Header-->

<!-- sign in and sign up modal -->

  
  <!-- Modal signup-->
  <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  <!-- sign in form -->
         <link rel="stylesheet" type="text/css"  href="signin.css">
		  <form action="signin.php" method="POST">
            
          
            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <button type="submit" name="submit">Sign In</button>
			  <br>
			  <label>
				<p>Not a member <a href="#" id="modal-sh1">Sign Up</a></p>
			  </label>
            </div>
          
            <div class="container" style="background-color:#f1f1f1">
              
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
		</div>
		
	  </div>
	</div>
  </div>

   <!-- Modal signin-->
   <div class="modal fade" id="exampleModal1" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  <!-- sign up form -->
		  <link rel="stylesheet" type="text/css"href="signup.css">

		  <form action="signup.php" method="POST" style="border:1px solid #ccc">
			<div class="container">
			  <h1>Sign Up</h1>
			  <p>Please fill in this form to create an account.</p>
			  <hr>
		  
			  <label for="email"><b>Email</b></label>
			  <input type="text" placeholder="Enter Email" name="email" required>
		  
			  <label for="phone"><b>Mobile No</b></label>
			  <input type="text" placeholder="Enter MobileNO" name="phone" required>
		  
			  <label for="Name"><b>Name</b></label>
			  <input type="text" placeholder="Enter Name" name="name" required>
			  
			  <label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>

			  <label for="psw"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" id="pass" name="psw" required>
		  
			  <label for="psw-repeat"><b>Repeat Password</b></label>
			  <input type="password" placeholder="Repeat Password" id="re-pass" name="psw-repeat" disabled required>
		  
			  <label>
				<input type="checkbox" name="remember" id="show-pass" style="margin-bottom:15px"> Show Password
			  </label>
			  <br>
			  <label>
				<p>Already a member <a href="#" id="modal-sh">Sign In</a></p>
			  </label>
		  
			  
		  
			  <div class="clearfix">
				<button type="submit" name="submit" id="submit" class="signupbtn" style="cursor: not-allowed;" disabled>Sign Up</button>
			  </div>
			</div>
		  </form>
		</div>
		
	  </div>
	</div>
  </div>

  <script>
	$(document).ready(function(){
		$("#modal-sh").click(function(){
			$('#exampleModal1').modal('toggle');
			$('#exampleModal').modal('show');
		});
		$("#modal-sh1").click(function(){
			$('#exampleModal').modal('toggle');
			$('#exampleModal1').modal('show');
		});
		$("#reserve").click(function(){
			$('#exampleModal1').modal('show');
		});
		$("#reserve1").click(function(){
			$('#exampleModal1').modal('show');
		});
		$("#reserve2").click(function(){
			$('#exampleModal1').modal('show');
		});
		$("#reserve3").click(function(){
			$('#exampleModal1').modal('show');
		});
		$("#show-pass").on('click',function(){
			if(this.checked){
				$("#pass").attr('type','text');
				$("#re-pass").attr('type','text');
			}
			else{
				$("#pass").attr('type','password');
				$("#re-pass").attr('type','password');
			}
		});
		$("#pass").on('keyup',function(){
			var pass = document.getElementById("pass").value;
			if(pass == ""){
				$("#re-pass").attr('disabled',true);
				document.getElementById("re-pass").value = "";
				("#re-pass").css("border","none");
			}
			else{
				$("#re-pass").attr('disabled',false);
			}
			
		});
		$("#re-pass").on('keyup',function(){
			var pass = document.getElementById("pass").value;
			var repass = document.getElementById("re-pass").value;
				
				if(pass == repass){
				$("#submit").attr('disabled',false);
				$("#submit").css("cursor","pointer");
				$("#re-pass").css("border","none");
			}
			else if(repass == ""){
				$("#re-pass").css("border","none");
			}
			else{
				$("#submit").attr('disabled', true);
				$("#submit").css("cursor","not-allowed");
				$("#re-pass").css("border","2px solid red");
			}
			
			
		});
	});
		
	</script>


<!--=========Slider section =========-->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-left">
			<img src="slider-01.jpg" alt="" id="opa">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> 𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝 Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
						trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#" id="reserve">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="slider-02.jpg" alt="" id="opa">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> 𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝 Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
						trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#" id="reserve1">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="slider-03.jpg" alt="" id="opa">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> 𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝 Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
						trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#" id="reserve2">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="bi bi-arrow-right-circle"></i></a>
		<a href="#" class="prev"><i class="bi bi-arrow-left-circle"></i></a>
	</div>
</div><!-- End slider Section-->

<!--===========About Section===========-->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Welcome To <span>Live Dinner Restaurent</span></h1>
					<h4>Little Story</h4>
					<p>The customer is very important, the customer will be followed by the customer. Feugiat is the author of the children. As at the children before, but the bow of the valley. No facilis, eros in eleifend mourning, hatred in front of the members of the propaganda, he needed lacinia bed and salad.</p>
					<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
					<a class="btn btn-lg-btn-circle btn-outline-new-white" href="#" id="reserve3">Reservation</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12"><img src="about-img.jpg" alt="" class="img-fluid"></div>
		</div>
	</div>
</div><!-- End Section -->
<!--============Start QT Section===========-->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<p class="lead">" If you're not the one cooking, stay out of the way and compliment the chif, "</p>
				<span class="lead">Shantanu jana</span>
			</div>
		</div>
	</div>
</div>
<!-- End section-->

<!--===========Start Gallery========-->
<div class="gallery-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Gallery</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat.</p>

				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-01.jpg">
					<img class="img-fluid" src="gallery-img-01.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-02.jpg">
					<img class="img-fluid" src="gallery-img-02.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-03.jpg">
					<img class="img-fluid" src="gallery-img-03.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-04.jpg">
					<img class="img-fluid" src="gallery-img-04.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-05.jpg">
					<img class="img-fluid" src="gallery-img-05.jpg" alt="Gallery Images">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="images/gallery-img-06.jpg">
					<img class="img-fluid" src="gallery-img-06.jpg" alt="Gallery Images">
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!--End gallery -->

<!--========== Customer Reviews==========-->
<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Customer Reviews</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<div class="carousel-item text-center active">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">𝔸𝕕𝕙𝕚𝕥𝕙𝕪𝕒 𝕊</strong></h5>
							<h6 class="text-dark m-0">Web Developer</h6>
							<p class="m-0 pt-3">The customer is very important, the customer will be followed by the customer. For I was at the time, more varied than at, the grief of God. The great fear of the great man, the devil, nor the ugly man, is always expected before. So drink chocolate not pure. The casino does not charge a lot of money.</p>
						</div>
						<div class="carousel-item text-center">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">𝙱𝙰𝚁𝙰𝚃𝙷 𝙺𝚄𝙼𝙰𝚁 𝚂</strong></h5>
							<h6 class="text-dark m-0">Web Designer</h6>
							<p class="m-0 pt-3">The customer is very important, the customer will be followed by the customer. For I was at the time, more varied than at, the grief of God. The great fear of the great man, the devil, nor the ugly man, is always expected before. So drink chocolate not pure. The casino does not charge a lot of money.</p>
						</div>
						<div class="carousel-item text-center">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">𝔸𝕟𝕕𝕣𝕖𝕨 𝕊𝕚𝕞𝕠𝕟</strong></h5>
							<h6 class="text-dark m-0">Seo Analyst</h6>
							<p class="m-0 pt-3">The customer is very important, the customer will be followed by the customer. For I was at the time, more varied than at, the grief of God. The great fear of the great man, the devil, nor the ugly man, is always expected before. So drink chocolate not pure. The casino does not charge a lot of money.</p>
					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!---------====================== Contact Section ================----------->
<div class="contact-imfo-box">
	<div class="container">
		<div class="row">
			<div class="col-md-4 ">
			<i class="bi bi-phone-fill"></i>
				<div class="overflow-hidden">
					<h4>Phone</h4>
					<p class="lead"> +91 3243 4566 45</p>
				</div>
			</div>
			<div class="col-md-4 ">
			<i class="bi bi-envelope-fill"></i>
				<div class="overflow-hidden">
					<h4>Email</h4>
					<p class="lead">yourmail@gmail.com</p>
				</div>
			</div>
			<div class="col-md-4">
			<i class="bi bi-geo-alt-fill"></i>
				<div class="overflow-hidden">
					<h4>Location</h4>
					<p class="lead">100, Rajiv Gandhi chennai</p>
				</div>
			</div>
		</div>
	</div>
</div><!--======= End Contact Section ========--->

<!--=========== Footer Section ==========-->
<footer class="footer-area bg-f">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<h3>About Us</h3>
				<p>The Grand Presidential Suite at 
					@𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝
					 pays a fitting tribute to the designs of Sir Edwin Lutyens. An effortless blend of grandeur & elegance, this suite has hosted many delecious foods.</p>
			</div>
			<div class="col-lg-3 col-md-6">
				
				<ul class="list-inline f-social">
				<li class="list-inline-item"><a href="#"><i class="bi bi-facebook"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="bi bi-twitter"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="bi bi-google"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="bi bi-instagram"></i></a></li>
				</ul>
			</div>
			<div id="col-lg-3 col-md-6">
				<h3>Contact information</h3>
				<p class="lead">OMR Street, High Tower, MO, Chennai, 0000001</p>
				<p class="lead"><a href="#">+91 2000 800 9999</a></p>
				<p><a href="#"> info@admin.com</a></p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3>Opening hours</h3>
				<p><span class="text-color">Monday: </span>Closed</p>
				<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
				<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
				<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
			</div>
		</div>
	</div>	

	<!--copyright-->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="company-name">All Rights Reserved. &copy; 2022 <a href="#"><span>𝓕𝓤𝓛𝓛 𝓜𝓞𝓞𝓝  Restaurent</span></a>   Design By : <a href="#"><span> 𝔸𝟚𝕓</span></a></p>
				</div>
			</div>
		</div>
	</div>
</footer>


<!--============ Back to Top ============-->
<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="bi bi-arrow-up-circle"></i></a>
		

		<?php
		endif;
	
?>



	<!-- ALL JS FILES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="jquery.superslides.min.js"></script>
	<script src="images-loded.min.js"></script>
	<script src="isotope.min.js"></script>
	<script src="form-validator.min.js"></script>
    <script src="contact-form-script.js"></script>
    <script src="custom.js"></script>
	<script src="jquery.mapify.js"></script>
	

</body>
</html>