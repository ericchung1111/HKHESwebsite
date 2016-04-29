<?php
include_once('db.php');

if (isset($_POST['send_message']) && !empty($_GET['id'])) {
	
	if (empty($_SESSION['userid'])) {
		header('location: login.php');
		exit;
	}
	
	$message = trim($_POST['message']);
	$blogID = $_GET['id'];
	
	$sql = "insert into blog_message (`userid`,`message`,`blogid`) values ('$_SESSION[userid]','$message','$blogID')";
	mysqli_query($link,$sql);
}

if (!empty($_GET['id'])) {
	$blogID = $_GET['id'];
	
	$sql = "select user.username,blog_message.message from blog_message left join user on user.id=blog_message.userid where blogid='$blogID'";
	$result1 = mysqli_query($link,$sql);
	
	$messageArr = array();
	while ($row = mysqli_fetch_array($result1)) {
		$messageArr[] = $row;
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
		<div class="logo"></div>
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
						<li class="active"><a href="blog.php">Blog</a></li>
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
<div class="single">
	<div class="container">
		<h3>Blog</h3>
				<div class="single wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<div class="blog-to1 service_info">		
					
						<img class="img-responsive sin-on" src="images/sin2.jpg" alt="" />
							<div class="blog-top">
							<div class="blog-left">
								<b>23</b>
								<span>July</span>
							</div>
							<div class="top-blog">
								<a class="fast" href="#">Hong Kong University of Science and technology </a>
								<p>Posted by <a href="#">Admin</a> in <a href="#">General</a> | <a href="#">10 Comments</a></p> 
								<p class="sed">The Hong Kong University of Science and Technology (HKUST) is a public research university in Clear Water Bay Peninsula, Hong Kong. Established in 1991, it is the territory's youngest higher learning institution with no precursory existence.</p> 
									 <p>The Academic Building contains 10 lecture theatres (A-H, J-K), a multitude of classrooms, laboratories and administrative offices, as well as ancillary facilities such as canteens, banks, a bookstore and a supermarket. The lecture theatres can accommodate classes of up to 450 students and offer audiovisual equipment. In addition, an information center and a souvenir shop can be found at the Piazza.</p>
							  <div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>		
		<div class="single-middle">
			
			<h3>2 Comments</h3>
				
                <?php if (!empty($messageArr)) { ?>
                	<?php foreach ($messageArr as $key => $value) {?>
                    	<div class="media in-media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="images/co.png" alt="">
                            </a>
                          </div>
                           <div class="media-body">
                            <h4 class="media-heading"><a href="#"><?php echo $value['username'];?></a></h4>
                                <p><?php echo $value['message'];?></p>
                          </div>
                        </div>
                    <?php }?>
                <?php } ?>
				
                
                
				
				  </div>
				</div>
			<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="single-bottom">
		
			<h3>Leave A Comment</h3>
            <div class="contact-main">

						<div class="contact-textarea">
				<form method="post">
                		<!--
						<div class="col-md-4 comment">
						<input type="text" value="" name="" placeholder="Name">
						</div>
						<div class="col-md-4 comment">
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						</div>
						<div class="col-md-4 comment">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						</div>
                        -->
						<div class="clearfix"> </div>
						<textarea cols="77" rows="6" value="" placeholder="Message" name="message"></textarea>
						<input type="submit" value="Send" name="send_message">
				</form>
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
								  <h3>Get In Touch</h3>
					  <p>Kowloon Street,</p>
					  <p>Tsim Sha Tsui</p>
					  <p>+85265783632</p>
					  
				 </div>
				 <div class="col-md-3 ftr-logo">
					 <a href="index.php"><h3>HKHES</h3></a>
					 <p></a></p>
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