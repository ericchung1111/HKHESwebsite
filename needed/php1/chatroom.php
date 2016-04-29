<?php
include_once('db.php');

if (empty($_SESSION['userid'])) {
	header('location: Login.php');
	exit;
}

if (isset($_POST['chatsubmit'])) {
	$chat_content = trim($_POST['chat_content']);
	
	if (empty($chat_content)) {
		$wrong = "message can not be empty!";
	} else {
		$sql = "insert into chat (`userid`,`message`) values ('$_SESSION[userid]','$chat_content')";
		mysqli_query($link,$sql);
	}
}



$sql = "select user.username,chat.message from chat left join user on user.id=chat.userid";
$result = mysqli_query($link,$sql);
$chatArr = array();
while ($row = mysqli_fetch_array($result)) {
	$chatArr[] = $row;
}



?>
<!DOCTYPE html>
<html>
<head>
<title>HKHES</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chatroom.css" rel="stylesheet" type="text/css" media="all" />
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
						<li class="active"><a href="Chat.php">Chat</a></li>
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
<div class="services" style="padding:10px 0px;">
	<div class="container">
		<h3 align="center">Chat Room</h3>
	</div>
</div>

	</div>
</div>

<div id="chatroom">
	<div class="chatcontent">

        
        <?php foreach ($chatArr as $key => $value) {?>
        <div class="item">
        	<div class="user"><?php echo $value['username'];?>:</div>
            <div class="say"><?php echo $value['message'];?></div>
        </div>
        <?php }?>
    </div>
    
    <div class="sent">
    	<form method="post">
        	<div><textarea name="chat_content" placeholder="message"></textarea></div>
            <div><button name="chatsubmit" type="submit">Submit</button><span style="color:red; margin-left:10px;"><?php echo $wrong;?></span></div>
        </form>
    </div>
</div>


<div align="center">
  <p>&nbsp;</p>
  <p>
    <!---End-container---->
    <!----><script type="text/javascript">
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
  </p>
</div>
<!----> 
</body>
</html>