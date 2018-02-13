<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<?PHP
session_start();
include("conn.php");
if(isset($_POST['edit'])){
	$dis = "enabled";
	?> <style type="text/css">#edit{display:none;}</style>
		<style type="text/css">#save{display:inline;}</style> <?PHP
} else{ $dis = "disabled"; ?>
		<style type="text/css">#edit{display:inline;}</style>
		<style type="text/css">#save{display:none;}</style>

<?PHP 
$user = $_SESSION['loggedin'];
if(isset($_POST['save'])){
$qry="UPDATE users LEFT JOIN staff ON users.role = staff.role LEFT JOIN member ON users.role = member.role SET staff.name='".$_POST['name']."', staff.address='".$_POST['address']."', staff.hp='".$_POST['hp']."', staff.dob='".$_POST['dob']."' WHERE staff.email='$user' OR member.email='$user'";
	
if (!mysqli_query($con,$qry))
{
die('Error: ' . mysqli_error($con));
}
 

$sql="UPDATE users LEFT JOIN staff ON users.role = staff.role LEFT JOIN member ON users.role = member.role SET member.name='".$_POST['name']."', member.address='".$_POST['address']."', member.hp='".$_POST['hp']."', member.dob='".$_POST['dob']."' WHERE staff.email='$user' OR member.email='$user'";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
mysqli_close($con); 
?>

<script type="text/javascript">
alert("Profile Updated.");
window.location.replace("profile.php");
</script>
		
<?PHP } ?>
<?PHP }
if (! empty($_SESSION['loggedin']))
{
		$user = $_SESSION['loggedin'];
		$query="SELECT member.*, staff.* FROM users LEFT JOIN staff ON users.role = staff.role LEFT JOIN member ON users.role = member.role WHERE staff.email='$user' OR member.email='$user'";
		$result=mysqli_query($con, $query);
		$row=mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html>
<head>
<title>TPM BookStore | Sign In</title>
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
	<?PHP include("header.php"); ?>
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow fadeInUp" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Profile</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	
						
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title"><span><?PHP echo $name ?></span></h3>
			<p></p>
		</div>
		<div class="widget-shadow">
			<?PHP  
			include("conn.php");
if (! empty($_SESSION['loggedin']))
{
		$user = $_SESSION['loggedin'];
		$query="SELECT member.*, staff.* FROM users LEFT JOIN staff ON users.role = staff.role LEFT JOIN member ON users.role = member.role WHERE staff.email='$user' OR member.email='$user'";
		$result=mysqli_query($con, $query);
		$row=mysqli_fetch_array($result);
		$name = $row[1].$row[10];
		$gender = $row[2].$row[11];
		$dob = $row[3].$row[12];
		$address = $row[4].$row[13];
		$hp = $row[5].$row[14];
		$email = $row[6].$row[15];
		
?>
			
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
			<form class="wow fadeInUp animated" data-wow-delay=".7s"  method="post">
					<table align="center">
					<th style="height: 5px"><h2>Account Information</h2></th>
					<tr>
						<td>Email</td>
						<td >:</td>
						<td ><input type="email" name="email" required="required" class="form-control" value="<?php echo $email ?>" disabled></td>
					</tr><br>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><button type="button" action="changepw.php" id="cpw" name="cpw">Change Password</button></td> 
					</tr>
					
					<tr> <td><br></td></tr>
					<th><h2>Personal Information</h2></th>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><input type="text" name="name" id="name" required="required" class="form-control" value="<?php echo $name ?>" <?PHP echo $dis ?>></td>
					</tr>
					<tr>
						<td>Handphone Number</td>
						<td>:</td>
						<td><input type="number" id="hp" name="hp" required="required" class="form-control" value="<?php echo $hp ?>" <?PHP echo $dis ?>></td>
					</tr>
					<tr>
						<td>Home Address</td>
						<td>:</td>
						<td><textarea name="address" required class="form-control" <?PHP echo $dis ?>><?php echo $address ?></textarea></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>:</td>
						<td><input type="radio" name="gender" <?php if ($gender == "Male") { ?>
									checked="checked" <?php } ?> value="Male" required="required" <?PHP echo $dis ?>> Male
							<input type="radio" name="gender" <?php if ($gender == "Female") { ?>
									checked="checked" <?php } ?> value="Female" required="required" <?PHP echo $dis ?>> Female 
						</td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td>:</td>
						<td><input type="date" name="dob" required="required" class="form-control" value="<?php echo $dob ?>" <?PHP echo $dis ?>>
						</td>
					</tr>
					<tr padding="5px"><td style="padding: 12px"></td></tr>
					<tr>
						<td colspan="2"></td>
						<td><input type="submit" id="edit" name="edit" value="Edit" style="width: 115px; margin: 0;" >
							<input type="submit" id="save" name="save" value="Save" style="width: 115px; margin: 0;">
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
			<?PHP } ?>
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

<?php
}
else
{
    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
} ?>