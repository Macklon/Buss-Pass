<?php 

 function fetch_data()  
 {  
      $output = '';  
      include ("connect.php");
      $email = $_POST['email'];
      $sql = "SELECT * FROM users WHERE email='$email'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {
           
      $output .= '
      				<tr><td align="center" rowspan="5"><img src="img/'.$row["image_name"].'"></td><td width="100px">Name</td><td>'.$row["name"].'</td></tr>
      
      				<tr><td>Phone number:</td><td>'.$row["mobile_no"].'</td></tr> 
                  	<tr><td>Date of birth:</td><td>'.$row["dob"].'</td></tr> 
                  	<tr><td>Address:</td><td>'.$row["address"].'</td></tr> 
                          ';  
      }  
      return $output;  
 }  

 if(isset($_POST["generate_pdf"]))  
 {  
 	include ("connect.php");
 	// $sql = "SELECT * FROM users";
 	// $result = mysqli_query($connect, $sql);  
  //     while($row = mysqli_fetch_array($result))  
  //     {
  //     $mail=$row["email"];
  //     }      
 	// if ($mail==$_POST['email']) {

 	$email = $_POST['email'];
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $query);
    $row=mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 1)
        {
 	  require_once('TCPDF/tcpdf.php'); 
 		//Add a custom size  
		 $obj_pdf = new TCPDF('p', 'pt', array(300,300), true, 'UTF-8', false);
      // $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("BUSHUB-BUSPASS");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();
		 
      $content = '';  
      $content .= '  
      <h4 align="center">BUSSPASS</h4><br /> 
      <table border="0" cellspacing="0" cellpadding="5">    
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('BUSSPASS.pdf', 'I'); 
 	}
 	else{
 		echo "<script type='text/javascript'>alert('Enter registered email!');</script>";
 	}
       
 }  
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<!-- Start Header --->
		<header>
			<!-- Star Navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top text-uppercase">
				<div class="container">
					<a class="navbar-brand text-white" href="#"><img class="logo-wrap" src="img/logo1.png" alt="logo"></a><img src="image/header/logo.png" alt="logo"></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						 <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse navbar-righ" id="navbarSupportedContent">
						    <ul class="navbar-nav ml-auto text-white">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="contactus.html">Contact Us</a></li>
								<li class="nav-item"><a class="nav-link" href="testimonial.php">Testimonials</a></li>
								<li class="nav-item"><a class="nav-link" href="aboutus.html">About Us</a></li>
								<li class="nav-item"><a class="nav-link" href="register.html">Apply Pass</a></li>
						    </ul>
					  </div>
				</div>
			</nav>
			<!-- End Navbar -->

			<!-- Start Main --->
			<div class="container">
				<div class="header-info text-center">
					<h1>A modern way to book your daily commute.</h1>
					<span class="text-white"><a class="btn btn-outline-light" href="register.html">Register Now</a></span>
				</div>
				<div class="row">
					<div class="img text-center ml-auto mr-auto col-mg-9 col-lg-10">
						<img src="image/header/taxi.png" alt="Taxi" class="img-fluid">
					</div>
				</div>
			</div>
			<!-- End Main -->
		</header>
		<!-- End Header -->
		<!-- Start bus -->
		<section id="pass" class="cab">
			<div class="container">
				<div class="row">
					<div data-aos="fade-right" data-aos-offset="200" class="col-md-6">
						<h4>Best In City</h4>
						<h3>Trusted Bus Servies in Banglore</h3>
						<button type="button" class="btn btn-dark">Read More</button>
					</div>
					<div data-aos="fade-left" data-aos-offset="200" class="col-md-6">
						<div class="cab-info">
							<h5 class="text-white">Download a <span class="number">Pass</span></h5>
							<form method="post" action="">
								<input type="email" placeholder="Email" name="email" class="form-control" required>
								<input type="submit" name="generate_pdf" value="Submit" class="form-control btn-dark">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Cab -->

		<!-- start sticky sidebar-->
		<div class="sticky-container">
    <ul class="sticky text-right">
        <li>
            <img src="img/feed.png" width="32" height="32">
            <p><a href="testimonial.php#feed" target="">Feedback</a></p>
        </li>
        <li>
        	<a href="#pass" target="">
            <img src="img/pass.png" width="32" height="32">
            <p>Download Pass</p>
            </a>
        </li>
        <li>
            <img src="img/trackicon.png" width="32" height="32">
            <p class=""><a href="trackbus.html" target="">Track your Bus</a></p>
        </li>
    </ul>
</div>
<!-- end sticky sidebar-->

<!-- Start Content -->
		<section class="content">
			<div class="container">
				<div class="info text-center">
					<h3 class="number">We Do Best</h3>
					<h2 class="text-white">Than You Wish</h2>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-5">
						<img src="image/content/icon/1.png" alt="icon">
						<h4 class="number">Home Pickup</h4>
						<p class="text-white">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.</p>
					</div>
					<div class="col-lg-6 mb-5">
						<img src="image/content/icon/2.png" alt="icon">
						<h4 class="number">Fast booking</h4>
						<p class="text-white">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.</p>
					</div>
					<div class="col-lg-3">
						
					</div>
					<div class="col-lg-6">
						<img src="image/content/icon/4.png" alt="icon">
						<h4 class="number">GPS searching</h4>
						<p class="text-white">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.</p>
					</div>
				</div>
				<button class="btn btn-yellow">Read More</button>
			</div>
		</section>
		<!-- End Content -->

		<!-- Start Card -->
		<section class="card-info text-center">
			<div class="container">
				<div data-aos="zoom-out" class="info">
					<h3 class="number">Transportation</h3>
					<h2>Charges</h2>
				</div>
				<div class="row pt-8">
					<div class="col-1">
					</div>

					<div class="col-lg-10">
						<div class="card">
							<img src="img/fee.png" alt="card">
							<div class="card-body">
								<h5 class="card-title">Regular college buses</h5>
								<!-- <p class="card-text">Regular college buses</p> -->
								<span class="number text-uppercase">Rs.25,000/-</span>
								<button class="btn btn-yellow">Read More</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Card -->
		
		<section class="testim">
			<div class="container">
				<div data-aos="zoom-out" class="info text-center">
					<h3 class="number">Happy Client's</h3>
					<h2 class="text-white">Testimonials</h2>
				</div>
				<div class="row">
					<div data-aos="fade-right" data-aos-offset="300" class="col-lg-6">
						<div class="testim-info">
							<p class="text-white">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.Quisque sollicitudin feugiat risus.</p>
							<div class="img">
								<img src="image/testim/1.jpg" alt="testim">
							</div>
							<h4 class="number">John Doe</h4>
							<h5 class="text-white">Business man</h5>
						</div>
					</div>
					<div data-aos="fade-left" data-aos-offset="300" class="col-lg-6">
						<div class="testim-info">
							<p class="text-white">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.Quisque sollicitudin feugiat risus.</p>
							<div class="img">
								<img src="image/testim/1.jpg" alt="testim">
							</div>
							<h4 class="number">John Doe</h4>
							<h5 class="text-white">Business man</h5>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testim -->
		<!-- Start Info -->
		<section class="infoo text-center bg-yellow">
			<div data-aos="zoom-out" class="info">
				<h3>We are Ready to Take Your Call 24 Hours, 7 Days!</h3>
				<p class="black">91 - 080-6717 8000 / 8021</p>
			</div>
		</section>
		<!-- End Info -->
		<!-- Start Contact -->
		<section id="contact-us" class="contact">
			<div class="container">
				<div class="row">
					<div  class="col-lg-4 text-center">
						<img class="" src="img/logo1.png" alt="logo">
						<h4 class="text-white">BusHub</h4>
					</div>

					<div  class="col-lg-4">
						<h4 class="text-white">About BusHub</h4>
						<p class="text-white">The campus being 12Kms from the heart of the city and more then 20Km from suburban areas of the city.
						<br>
						The city metropolitan transport service also runs city buses from important areas of city to the college.</p>
					</div>

					<div>
						<h4 class="text-white">Contact</h4>
						<ul class="list-unstyled text-white info">
							<li><i class="fa fa-map-marker fa-fw" araia-hidden="true"></i> <span class="text-white">Mysore Road, R V Vidyanikethan Post,<br>Banglore, Karnataka 560059</span></li>
							<li><i class="fa fa-mobile fa-fw" araia-hidden="true"></i> +91 9738936421</li>
							<li><i class="fa fa-envelope fa-fw" araia-hidden="true"></i> email@gmail.com</li>
							<li><i class="fa fa-paper-plane fa-fw" araia-hidden="true"></i> www.bushub.com</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		

		<footer class="text-white text-center">
			Copyright &copy; 2018 BusHub  All Rights Reserved
		</footer>
		<!-- End footer -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>