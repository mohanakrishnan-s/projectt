<?php
extract($_POST);
session_start(); 
include("dbconnect.php");
if(isset($_POST['btn'])) 
{
	$uname=$_REQUEST['username'];
	$password=$_REQUEST['password'];

	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
	 $qry="select * from admin where username='$uname' and  password='$password'";
	$result = mysqli_query($conn, $qry);
	 if (mysqli_num_rows($result)) 
	{


	?>					
	<script language="javascript">
	alert("login Success");
	window.location.href="admin_home.php";
	</script>
	<?php

	}  
	else
	{
 
	?>					
	<script language="javascript">
	alert("Invalid username and password");
	</script>
	<?php

	}
  
}
 
$conn->close();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ATTORNEY SCHEDULING </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lawer  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
		
<!-- //custom-theme files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files-->

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- date picker css-->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- date picker css-->

<!-- googlefonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //googlefonts -->

</head>
<body>
<!-- banner -->
<div class="banner1">
	<div class="banner-layer1">
	<div class="container">
		<div class="banner-logo">
			<a href="#">
				<i class="fa fa-balance-scale" aria-hidden="true"></i>
				<h1>ATTORNEY <span>SCHEDULING </span> </h1>
			</a>
		</div>
	  </div>
				<div class="agileits_w3layouts_menu">
					<div class="shy-menu">
						<a class="shy-menu-hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
						</a>
						<div class="shy-menu-panel">
							<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
								<ul class="w3layouts_menu__list">
									<li><a href="index.php">Home</a></li>
									<li  class="active"><a href="admin_login.php">Admin</a></li>
									<li><a href="Lawer _login.php">Lawer s</a></li>
									<li><a href="people_login.php">People</a></li>
								</ul>
							</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<div class="w3_agile_social_icons">
				<ul class="agileinfo_social_icons">
					
				</ul>
			</div>
			<div class="wthree-banner-info">
				<div class="container">
					<h2>Admin</h2>
				</div>
			</div>
  </div>
</div>
<!-- //banner -->
<form name="form1" method="post" action="">
  <h1 align="center">&nbsp;</h1>
  <h1 align="center">&nbsp;</h1>
  <h1 align="center">Admin Login</h1>
  <p align="center">&nbsp; </p>
  <table width="353" height="163" border="0" align="center">
    <tr>
      <td>Username</td>
      <td><label>
        <input name="username" type="text" id="username">
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
        <input name="password" type="password" id="password">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="btn" value="Login">
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<!-- who we are -->
<!-- //who we are -->
<!-- Counter -->
<!-- //Counter -->
<!-- legal services -->
<!-- //legal services -->
<!-- appointment -->
<!-- //appointment -->
<!-- footer -->
<!-- //footer -->
<!-- copyright -->
<div class="wthree_copy_right">
  <div class="container">
		<p>&copy;     All rights reserved | Design by <a href="#">Admin</a></p>
			
  </div>
</div>
<!-- //copyright -->

<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Lawer 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 

<!-- bootstrap-modal-pop-up for appointment -->
	<div class="modal appointment1 video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				Request an appointment
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
					<form action="#" method="post">
						<input type="radio" name="gender" value="male" checked>New client<br>
						<input type="radio" name="gender" value="female">Existing client<br>
						<ul>
							<li><input type="text" name="Full Name" placeholder="Full Name" required=""></li>
						</ul>
						<ul>
							<li><input type="email" class="email" name="Email" placeholder="Email" required=""></li>
							<li><input type="text" name="Number" placeholder="Mobile Number" required=""></li>
							<li><input class="date" id="datepicker1" type="text" name="Number" placeholder="Date" required=""></li>
						</ul>
						<select id="category" name="category" required="">
							<option value="">Legal Cases</option>
							<option value="category1">Divorce</option>
							<option value="category2">Crime Case</option>
							<option value="category3">Suicide Case</option>
							<option value="category3">Others</option>
						</select>
						<textarea name="Message" placeholder="Address..." required=""></textarea>
						<div class="clearfix"></div>
						<ul class="appointmentbtn">
							<li><input type="submit" name="Send" value="Get Appointment"></li>
							<li><input type="reset" value="Cancel"></li>
						</ul>
						<div class="clearfix agile"></div>
					</form>

					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up for appointment --> 

<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

<!-- menu -->
	<script>
		$(function() {
			
			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {
				
				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {			
					
					allMenus.removeClass("is-open");	
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}
				
				return false;
			});
		}
	</script>
<!-- //menu -->

		<!-- Stats-Number-Scroller-Animation-JavaScript -->
				<script src="js/waypoints.min.js"></script> 
				<script src="js/counterup.min.js"></script> 
				<script>
					jQuery(document).ready(function( $ ) {
						$('.counter').counterUp({
							delay: 50,
							time: 2000
						});
					});
				</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->
		
<!-- date picker -->
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
			$( "#datepicker,#datepicker1" ).datepicker();
			 });
		</script>
<!-- //date picker -->

<!-- here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
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
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

</body>
</html>