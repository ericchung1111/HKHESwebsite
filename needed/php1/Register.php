<?php

include_once('db.php');

if (isset($_POST['register'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$password2 = trim($_POST['password2']);
	$address = trim($_POST['address']);
	$email = trim($_POST['email']);
	
	if (empty($username) || empty($password) || empty($password2) || empty($address) || empty($email)) {
		$wrong = "all inputs can not be empty";
	} else if ($password != $password2) {
		$wrong = "two password must be the same";
	} else {
		$sql = "select * from user where username='$username'";
		$result1 = mysqli_query($link,$sql);
		if ($row = mysqli_fetch_array($result1)) {
			$sql = "this username have be existed, please change another one'";
		} else {
			$sql = "insert into user (`username`,`password`,`address`,`email`) values ('$username','$password','$address','$email')";
			mysqli_query($link,$sql);
			header('location: succeed.php');
			exit;
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>HKHES</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--/css-->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->		
<!-- js -->
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- /js -->
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
<body>
<!--header-->
<div class="header">
<div class="header-nav">
	<div class="container">
		<div class="logo">
						<a href="index.php">
			<img src="images/logo1.png" alt="" width="211" height="206" /></a>
		</div>
		<div class="navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
					</div>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="Chat.php">Chat</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="gallery.php">Goods</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					  </ul>
			  <div class="clearfix"> </div>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
	</div>
	</div>
</div>
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
<div class="banner banner5">
</div>		
<!--inner-page-about-->
<div class="contact">
	<div class="container">
		<h3>Register</h3>
			<div class="contact-main">
				<div class="contact-top">
					<div class="col-md-6 contact-top-left"></div>
					<div class="col-md-6 contact-top-right">
						<div class="contact-textarea">
							<form method="post">
							  <input type="text" name="username" value="" placeholder="Username"/>
							  <input type="password" name="password" value="" placeholder="Password"/>
                              <input type="password" name="password2" value="" placeholder="Password again"/>
                              <input type="text" name="address" value="" placeholder="Address"/>
                              <input type="text" name="email" value="" placeholder="Email"/>
                              <div style="color:red"><?php echo $wrong;?></div>
							  <input type="submit" name="register" value="Register">
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!--/inner-page-about-->
 <div class="footer">
			 <div class="container">				 	
				 <div class="col-md-3 ftr_navi ftr">
					 <h3>NAVIGATION</h3>
					 <ul>
						 <li><a href="index.php">Home</a></li>
						 <li><a href="about.php">About</a></li>
						 <li><a href="gallery.php">Gallery</a></li>						
						 <li><a href="blog.php">Blog</a></li>
						 <li><a href="contact.php">Contact</a></li>
					 </ul>
				 </div>
				 <div class="col-md-3 ftr_navi ftr">
					 <h3>MEMBERS</h3>
					 <ul>
						 <li><a href="#">Customer Support</a></li>
						 <li><a href="#">Platinum Support</a></li>
						 <li><a href="#">Gold Support</a></li>						
						 <li><a href="#">Standard Support</a></li>
						 <li><a href="#">Training</a></li>
					 </ul>
				 </div>
				 <div class="col-md-3 get_in_touch ftr">
					  <h3>GET IN TOUCH</h3>
					  <p>Ola-ola street jump,</p>
					  <p>260-14 City, Country</p>
					  <p>+62 000-0000-00</p>
					  <a href="mailto:mail@mlampah.com">www.example.com</a>
				 </div>
				 <div class="col-md-3 ftr-logo">
					 <a href="index.php"><h3>Travels</h3></a>
					 <p>© 2015 Travels. Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				 </div>
				<div class="clearfix"> </div>
			 </div>
		  </div>
		 <!---End-container---->
		 <!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</body>
</html>