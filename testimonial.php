<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<style type="text/css">
			.feedback-form{
			    border: 1px dotted white;
			}

			.feedback .mandatoryColor{
			    color: red;
			}
			td{
				padding: 10px;
			}
			td:first-child{
				padding-right: 50px;
			}
			td:last-child{
				width: 700px;
			}
			input[type="text"],input[type="email"]{
				width: 300px;
			}
			.sel{
				width: 300px;
			}
			input[type="radio"]{
				margin: 5px;
			}
		</style>
	</head>
	<body>
		<header>	
			<nav class="navbar navbar-expand-lg navbar-dark nav-back fixed-top text-uppercase">
				<div class="container">
					<a class="navbar-brand text-white" href="#"><img class="logo-wrap" src="img/logo1.png" alt="logo"></a><img src="image/header/logo.png" alt="logo"></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						 <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse navbar-righ" id="navbarSupportedContent">
						    <ul class="navbar-nav ml-auto text-white">
								<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="contactus.html">Contact Us</a></li>
								<li class="nav-item active"><a class="nav-link" href="testimonial.php">Testimonials</a></li>
								<li class="nav-item"><a class="nav-link" href="aboutus.html">About Us</a></li>
								<li class="nav-item"><a class="nav-link" href="register.html">Apply Pass</a></li>
						    </ul>
					  </div>
				</div>
			</nav>
		</header>

		<!-- start sticky sidebar-->
		<div class="sticky-container">
    <ul class="sticky text-right">
        <li>
            <img src="img/feed.png" width="32" height="32">
            <p><a href="testimonial.php#feed" target="">Feedback</a></p>
        </li>
        <li>
        	<a href="index.php#pass" target="">
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

		<section class="testim">
			<div class="container">
				<div class="info text-center">
					<h3 class="number">Happy Client's</h3>
					<h2 class="text-white">Testimonials</h2>
				</div>
				<div class="row">
					<div  class="col-lg-6">
						<div class="testim-info">
							<p class="text-white">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.Quisque sollicitudin feugiat risus.</p>
							<div class="img">
								<img src="image/testim/1.jpg" alt="testim">
							</div>
							<h4 class="number">John Doe</h4>
							<h5 class="text-white">Business man</h5>
						</div>
					</div>
					<div class="col-lg-6">
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

				<div class="row">
					<div  class="col-lg-6">
						<div class="testim-info">
							<p class="text-white">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.Quisque sollicitudin feugiat risus.</p>
							<div class="img">
								<img src="image/testim/1.jpg" alt="testim">
							</div>
							<h4 class="number">John Doe</h4>
							<h5 class="text-white">Business man</h5>
						</div>
					</div>
					<div class="col-lg-6">
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

				<?php

				  include ("connect.php");
				           
				  if (isset($_POST['submit']))
				  {  
				    $name=$_POST['name'];
				    $phno=$_POST['mobile_no'];
				    $email=$_POST['email'];
				    $dept=$_POST['department'];
				    $ftype=$_POST['type'];
				    $fdescription=$_POST['feedback_description'];
				    
				    echo "$desc";

				    $sql="INSERT INTO feedback (name,mobile_no,email,department,feedback_type,feedback_description) VALUES ('$name','$phno','$email','$dept','$ftype','$fdescription') ";

				    $result=mysqli_query($connect,$sql) or die ("Cannot query with database table ");

				    if($result)
				     {
				            echo "<script type='text/javascript'>alert( 'Thank you for your valuable feedback, it really helps us serve you better.');</script>";
				      }
				  }  
				?>
	
        <div class="feedback" id="feed" style="margin-top: 100px;">
        <div class="text-white para mt-3"> 
			Whether you are looking for information or trying to provide feedback, we look forward to hearing from you! We value your suggestions.
            So please go ahead and select any one of the three options below, describe your query/suggestion and send it to us!
        </div>
        
        <form method="post" class="feedback-form mt-4 p-4 text-white">
        
        <table>
        	<tr>
	            <div class="form-group">
		            <td>Number <span class="mandatoryColor"> * </span></td>
		            <td><input class="form-control" type="text" maxlength="10" placeholder="Phone Number" name="mobile_no" required></td>
	            </div>
        	</tr>
        	<tr>
	            <div class="form-group">
	                <td> Your name </span></td> 
	                <td><input type="text" class="form-control" name="name" placeholder="Name" required=""></td>
	            </div>
            </tr>
            <tr>
	            <div class="form-group">
	                <td>Email <span class="mandatoryColor"> * </span></td>
	                <td><input type="email" class="form-control" name="email" placeholder="Email Id" required=""></td>
	            </div>
	        </tr>
	        <tr>
	            <div class="form-group">
	            	<td>Department<span class="mandatoryColor"> * </span></td>
	            	<td><select class="form-control sel"  name="department" autocomplete="off">
	                    <option disabled selected>- select -</option>
						<option value="Call Center">Call Center</option>
						<option value="Hygiene">Hygiene</option>
						<option value="Maintenaince">Maintenaince</option>
						<option value="Operations">Operations</option>
	                 </select></td>
	            </div>
	        </tr>
	        <tr>
	            <div class="form-group">
	                <td>Feedback Type <span class="mandatoryColor "> * </span></td>
	                <td><input  type="radio"  name="type" value="Suggestion" checked><span>Suggestion</span>
	                <input type="radio" value="Complaints" name="type" ><span>Complaints</span>  
	                <input type="radio" value="Enquiry" name="type" ><span>Enquiry</span> 
	                <input type="radio" value="Compliments" name="type" ><span>Compliments</span> 
	                <input type="radio" value="Payment/Refunds" name="type" ><span>Payment/Refunds</span></td>
	            </div>
            </tr>
            <tr>
            <div class="form-group">
				<td>Description<span class="mandatoryColor"> * </span></td>
                <td><textarea type="text" rows="5" cols="50" name="feedback_description" class="form-control"  required></textarea></td>
            </div>
            </tr>
            <tr>
            	<td></td>
                <td><input type="submit" name="submit" class="btn btn-yellow"> </td>  
            </tr>

            </table>
        </form>
    	
    	</div>
		
		</div>
	</section>
		

		<footer class="text-white text-center">
			Copyright &copy; 2018 BusHub  All Rights Reserved
		</footer>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>