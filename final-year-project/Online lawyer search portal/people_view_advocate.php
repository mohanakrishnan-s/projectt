<?php
extract($_POST);
session_start(); 
include("dbconnect.php");
$uname=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ATTORNEY SCHEDULING</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lawyer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
<!-- //googlefonts --></head>
<body>
<!-- banner -->
<div class="banner1">
	<div class="banner-layer1">
	<div class="container">
		<div class="banner-logo">
			<a href="index.html">
				<i class="fa fa-balance-scale" aria-hidden="true"></i>
				<h1>ATTORNEY<span>SCHEDULING </span> </h1>
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
									<li  class="active"><a href="people_home.php">Home</a></li>
									<li><a href="people_view_Lawyer.php">View Lawyer</a></li>
									<li><a href="people_view_status.php">View Status</a></li>
									<li><a href="logout.php">Logout</a></li>
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
					<h2>People</h2>
				</div>
			</div>
  </div>
</div>
<!-- //banner -->
<form name="form1" method="post" action="">
  <h1 align="center">&nbsp;</h1>
  <h1 align="center">&nbsp;</h1>
  <h1 align="center">List of Lawyers</h1>
  <p align="center">&nbsp;</p>
  <p align="center"> <h3 class="agile-title" align="center">Search</h3>
                    <form name="form1" method="post" action="">
                      <table width="291" height="114" border="0" align="center">
                        <tr>
                          <td>Search</td>
                          <td><label>
                            <input name="search" type="text" id="search" required> 
                          </label></td>
                        </tr>

                        <tr>
                          <td height="29">&nbsp;</td>
                          <td><label>
                            <input type="submit" name="Submit" value="Search">
                          </label></td>
                        </tr>
                      </table>
					  &nbsp;</p>
  <p align="center">&nbsp;</p>
  <p> 
 
				</p>
  <?php
  if(isset($Submit))
  {
  $data=$_REQUEST['search'];
  ?>
  <table width="893" height="84" border="0" align="center">
    <tr>
      <td><strong>Name</strong></td>
      <td><strong>Bar Council Regno </strong></td>
      <td><strong>Lawyer Type </strong></td>
      <td><strong>Select</strong></td>
    </tr>
    <?php
	$qry="select * from  advogate_register where adv_type='$data'";
	$result = mysqli_query($conn, $qry);
	while($row=mysqli_fetch_assoc($result))
	{ 
	?>
    <tr>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['bar_council_regno'];?></td>
      <td><?php echo $row['adv_type'];?></td>
      <td><a href="people_describe_problem.php?bid=<?php echo $row['id'];?>&&uid=OK">Select</a></td>
    </tr>
    <?php
	}
	?>
  </table>
  <?php
  }
  ?>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp; </p>
 
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
					Lawyer
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