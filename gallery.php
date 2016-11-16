<!DOCTYPE HTML>
<html>
<head>
<title></title>
<!--gallery-->

<link href="movetop/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {font-size: 36px}
-->
</style>
<script src="animation/js/wow.min.js"></script>
<link href="animation/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
</head>
<body>
<div class="header_bg1">
    <div class="container">
        <div class="row header">
            <div class="logo navbar-left">
                <h3><span class="style1"><h2><div class="copy wow fadeInRight" data-wow-delay="0.4s">Master Of Computer Applications</div></h2></span></h3>
                <p>&nbsp;</p>
          </div>
            <div class="h_search navbar-right">
                <!--<form>
                    <input type="text" class="text" value="Enter text here" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter text here';}">
                    <input type="submit" value="search">
                </form>-->
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row h_menu">
            <nav class="navbar navbar-default navbar-left" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="course.php">Course</a></li>
                    <li><a href="faculty.php">Faculty</a></li>
                    <li><a href="project_show.php">Project Details</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li   class="active"><a href="gallery.php">Gallery</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                   <!-- <li><a href="slogin.php"><span class="glyphicon glyphicon-log-in"></span>Student Login</a></li>-->
                  </ul>
                </div><!-- /.navbar-collapse -->
                <!-- start soc_icons -->
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php
	include_once("query.php"); 	
	$obj=new query();
	$res1=$obj->view_category();
?>

    <div class="container">
		<?php while($row=mysql_fetch_assoc($res1)) { ?>
            <div class="col-md-2">
                <f2><?php echo $row['category']; ?></f2>:
                    <a href="viewgallery.php?cate=<?php echo $row['category'];?>">						<span class="glyphicon glyphicon-folder-open"> </span>
                    </a><br>
            </div>
        <?php }?>
     </div> 
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
	<!--//gallery-->

	</div>
</div>	
<div class="container">
    <div class="row">
    <div class="col-md-4 single-page-right">
				<div class="category blog-ctgry">
					<h4>Links</h4>
					<div class="list-group">
						<a href="hod.php" class="list-group-item"><strong>HoD's Desk</strong></a>
                        <a href="techstaff.php" class="list-group-item"><strong>Technical Staff</strong></a>
						<a href="vm.php" class="list-group-item"><strong>Vision and mission</strong></a>
						<a href="association.php" class="list-group-item"><strong>Activities</strong></a>
						<a href="lib.php" class="list-group-item"><strong>Library</strong></a>
						<a href="lab.php" class="list-group-item"><strong>Lab and fecilities</strong></a>
						<a href="download.php" class="list-group-item"><strong>Downloads</strong></a>
						<!--<a href="placement.php" class="list-group-item"><strong>Placements</strong></a>-->
						<a href="eligibility.php" class="list-group-item"><strong>Eligibility</strong></a>
                        <a href="gallery.php" class="list-group-item active"><strong>Gallery</strong></a>
                        
					</div>
				</div>	
   </div>
         <div class="col-sm-5 wow fadeInLeft" data-wow-delay="0.4s">
        
     </div>
     <div class="col-sm-3">
   
     </div>
    
    
    </div>
  </div>


<div class="main_bg"><!-- start main -->
	<div class="container">
    	<div class="about row">
        
						
			
	    </div>
	</div>
</div>

	<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<!--<script type="text/javascript">
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
								</script>-->
		

<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="about.php">About</a> |
								<a href="course.php">Course</a> |
								<a href="faculty.php">Staff</a> |
								<a href="contact.php">Contact</a> |
                                <a href="contact.php">Contact</a> |
								<a href="login.php">Login</a>
							</p>
						</div>
					</div>
					</div>
				
</div>
	</footer>
</body>
</html>