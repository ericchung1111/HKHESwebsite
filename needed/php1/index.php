<?php
include_once('db.php');

$sql = "select * from home where id=1";
$result = mysqli_query($link,$sql);
$homeInfo = mysqli_fetch_array($result);
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
						<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
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
    
    <div class="userinfo" style="text-align:right; margin-right:10px;">
      <?php if (empty($_SESSION['userid'])) {?>
      <span class="selected"><i class=""><span><a href="Login.php">Login</a></span></i></span>
      <?php } else {?>
      <span class="selected"><i class=""><span>Hi,<?php echo $userInfo['username'];?></span><span><a href="logout.php">Log out</a></span></i></span>
      <?php }?>
	</div>
<p>&nbsp;</p>
</div>
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
<div class="banner">
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
 <div class="slider">
	
		   <div class="container">
			  <ul class="rslides" id="slider">
				 <li>	          
					<div class="banner-info">
						<h2>Virtual reality experience</h2>
						<p>Ever wondered how virtual reality worked? Find out now!</p>
					</div>
				 </li>
				 <li>	          
					 <div class="banner-info">
						<h2>Explore Hong Kong and learn</h2>
						<p>Always wanted to study in Hong Kong? join us today and learn the latest updates</p>
					</div>
				 </li>
				 <li>	          
					 <div class="banner-info">
						<h2>Trip to Beijing University</h2>
						<p>Beijing is a our capital city, rich in chinese culture and adventures. Make sure you dont miss out this fantasitic trip of a life time</p>
					</div>
				 </li>
			  </ul>
		  </div>
</div>


</div>	
<!--/header-->	
<div class="banner-bottom-strip">
	<div class="container">
		<h3><span class="banner"><span class="logo"><a href="index.php"><img src="images/logo1.png" alt="" /></a></span></span>Welcome to HKHES!</h3>
		<p>Education is for everyone. Without education everything is lost. Our world will be a very boring place to live in. At HKHES we will provide eduction in any mean possible. We have stations stationed throughout the mainland China and Hong Kong itself. We want provide education for all! </p>
	</div>
</div>	
<div class="welcome">
	<div class="container">
		<h3>How are you today?</h3>
		<p>Feel free to roam around our website to find our latest updates,trips and merchandises</p>
	</div>
</div>
<!--works start here-->
<div class="work">
	<div class="container">
		<div class="work-main">
			   <div class="col-md-6 work-wrapper">		
							<a href="images/a1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Awesome Trip">
						     <img src="images/a1.jpg" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><i class="glyphicon glyphicon-zoom-in"> </i> </h2>
						  		</div></a>
						  									<a href="images/a3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Awesome Trip">
						     <img src="images/a3.jpg" alt="" class="img-responsive"><div class="b-wrapper1"><h2 class="b-animate b-from-left    b-delay03"><i class="glyphicon glyphicon-zoom-in"> </i></h2>
						  		</div></a></div>
			   <div class="col-md-6 work-wrapper">		
							<a href="images/a2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Awesome Trip"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><i class="glyphicon glyphicon-zoom-in"> </i></h2>
						  		</div></a>
						  					   <div class="work wrk1">		
                         <div class="work-details wrk">
					   	  <h3><i class="glyphicon glyphicon-chevron-up"> </i>New Activity!</h3>
					   	 <p>
                         	<?php echo $homeInfo['content'];?>
                         </p>
					   </div>
			   </div>
			   </div>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
<!--works end here-->
<!--effect-gird-->
<div class="container"></div>
<!--/effect-gird-->
<div class="index-services"></div>
<!--footer-->
 <div class="footer">
			 <div class="container">				 	
				 <div class="col-md-3 ftr_navi ftr">
					 <h3>Navigation</h3>
					 <ul>
						 <li><a href="index.php">Home</a></li>
						 <li><a href="about.php">About</a></li>
						 <li><a href="gallery.php">Gallery</a></li>						
						 <li><a href="blog.php">Blog</a></li>
						 <li><a href="contact.php">Contact</a></li>
					 </ul>
				 </div>
				 <div class="col-md-3 ftr_navi ftr">
					 <h3>Members</h3>
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
<!--footer-->
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