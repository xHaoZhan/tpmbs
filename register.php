<?php 
include("conn.php");
if(isset($_POST['reg'])){
$sql="INSERT INTO member (mid, name, gender, dob, address, hp, email, password) VALUES ('$_POST[mid]','$_POST[name]','$_POST[gender]','$_POST[dob]','$_POST[address]','$_POST[hp]','$_POST[email]','$_POST[password]')";
	
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
mysqli_close($con); ?>

<script type="text/javascript">
alert("Account registered.");
window.location.replace("login.php");
</script>

<?PHP
		}
 ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>TPM BookStore | Register</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<?PHP include('header.php') ?>
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Register<span> Form</span></h3>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Already have an Account ?<a href="login.php">  Log In »</a> </h4>
			</div>
			<div class="login-body">
				<form class="wow fadeInUp animated" data-wow-delay=".7s" action="register.php" method="post">
					<table align="center">
					<th style="height: 5px"><h2>Account Information</h2></th>
					<tr>
						<td>Email</td>
						<td >:</td>
						<td ><input type="email" name="email" required="required" class="form-control"></td>
					</tr><br>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" id="password"  required="required" class="form-control"></td>
					</tr>
					<tr>
						<td>Retype Password</td>
						<td>:</td>
						<td><input type="password" name="re-pw" id="re-pw" required="required" class="form-control"></td>
						<td><span id="message"></span></td>
					</tr> 
					<tr> <td><br></td></tr>
					<th><h2>Personal Information</h2></th>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><input type="text" name="name" id="name" required="required" class="form-control"></td>
					</tr>
					<tr>
						<td>Handphone Number</td>
						<td>:</td>
						<td><input type="number" id="hp" name="hp" required="required" class="form-control"></td>
					</tr>
					<tr>
						<td>Home Address</td>
						<td>:</td>
						<td><textarea name="address" required class="form-control"></textarea></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>:</td>
						<td><input type="radio" name="gender" value="Male" required="required"> Male
							<input type="radio" name="gender" value="Female" required="required"> Female 
						</td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td>:</td>
						<td><input type="date" name="dob" required="required" class="form-control">
						</td>
					</tr>
					<tr padding="5px"><td style="padding: 12px"></td></tr>
					<tr>
						<td colspan="2"></td>
						<td><input type="submit" name="reg" value="Submit" style="width: 115px; margin: 0;display: inline" >
							<input type="reset" value="Reset"  style="width: 115px; margin: 0;display: inline">
						</td>
					</tr>	
					<tr>
						<td >
							<?PHP include('conn.php'); $sq="SELECT COUNT(member.mid) FROM member";  $re=mysqli_query($con,$sq); ?>
							<input type="text" style="display: none" name="mid" id="mid" value="M<?PHP $row = mysqli_fetch_array($re); echo $row['COUNT(member.mid)']+1 ?>">
						</td>
						
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>
	<!--//login-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php">Modern <b>Shoppe</b> <span class="tag">Everything for Kids world </span> </a></h4>
					<p>© 2016 Modern Shoppe . All rights reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="products.html">new</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="checkout.html">Wishlist</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our Company </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required="">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->		
	<!--verify pw-->
	<script>var password = document.getElementById("password"), 
				confirm_password = document.getElementById("re-pw");

		function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
		}

			password.onchange = validatePassword;
			confirm_password.onkeyup = validatePassword;
	</script>
	<!--//verify pw-->
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>