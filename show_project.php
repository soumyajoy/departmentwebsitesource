
<?php
session_start();
include_once'query.php';
$obj=new query();
$res=$obj->load_project();
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>

<link href="movetop/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="movetop/css/chocolat.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css"> 
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript" src="movetop/js/move-top.js"></script>
<script type="text/javascript" src="movetop/js/easing.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<script type="text/javascript">
				$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1500);
			});
		});
	</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
        <script src="animation/js/wow.min.js"></script>
<link href="animation/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 80%;
      margin: auto;
  }
.style8 {color: #333333}
.style10 {color: #FF0000}
.style13 {font-size: medium}
.style14 {color: #FF8000}
.style15 {color: #804000}
.style16 {color: #00FFFF}
.style17 {color: #800080}
.style19 {color: #FFFFFF}
</style>
<style>
.input1{
	color:#000;background:#CCC;
	width:80%;
}
</style> 
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
	function aa()
	{
	$('#menu0').removeClass("show");
	$('#menu0').addClass("fade");
	
	}
    </script>
    <script src="reg_valid.js"></script> 
</head>
<body>

 <div class="row header header_bg1" style="padding-top:5px;padding-bottom:5px;" >
    <div class="logo navbar-left">
        <h3 style="padding-left:50px;"><span class="style1"><h2><div class="copy wow fadeInRight" data-wow-delay="0.4s">Master Of Computer Applications</div></h2></span></h3>
        
  </div>
    <div class="h_search navbar-right">
    </div>
    <div class="clearfix"></div>
    <div class="container" style="margin-top:30px;">
    	<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
        <div class="navbar-header"><a class="navbar-brand" href="#"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="student_home.php">Home</a></li>
		        <!--<li><a href="show_project.php">Project Details</a></li>--> 
                <li><a href="view_attendence.php">Attendance details</a></li>
                <li><a href="show_message.php">View Message</a></li>
                <li><a href="show_internal.php">Internal Mark Details</a></li>
                <li><a href="change_pwd.php">Change Password</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Sign Out</a></li>
               <!-- <li><a href="slogin.php"><span class="glyphicon glyphicon-log-in"></span>Student Login</a></li>-->
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
        </div>
	</div>
    <div class="clearfix"></div>
</div>
</div>
        
        
        
  


        <!--<div class="container">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
           <div id="banner">
             <h1>Bootstrap <strong>Registration Form</strong> for .net developers</h1>

            <h5><strong>aspxtemplates.com</strong></h5>
           
           </div>-->
          
          
              
            
                        <div class="col-lg-2"></div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background:#FFF">
            <div class="project details">
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <fieldset>
                    
                    <!-- <div class="form-group">
                        <div class="row" style="font-size:18px;">
                             <div class="col-lg-3">Sl. No.</div>
                             <div class="col-lg-3">Student Name</div>
                             <div class="col-lg-3">Project Name</div>
                             <div class="col-lg-3">Year</div>
                         </div>
                        </div>-->
                   
<table border=2;width="100%";cellspacing="200%"; cellpadding="100%">
<style="font-size:22px;">
<tr>
 <th> Roll no </th>
 <th> Name </th>
 <th> Project title </th>
 <th> Year </th>
</tr>


                       
                        <tr>        
                        <?php $i=1;
							while($row=mysql_fetch_assoc($res))
							{
								?>
                             <td> <?php echo $i;?></td>
                             <td><?php echo $row['sname'];?></td>
                             <td><?php echo $row['pname'];?></td>
                             <td><?php echo $row['year'];?></td>
                           </tr>
                        <?php
						$i++;
                        }
					    ?> 
                         
                          </table> 
                </fieldset>
            </form>
         </div>



         </div>
        </div>
        <script src="registration Form/js/jquery.js" type="text/javascript"></script>
        <script src="registration Form/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="registration Form/js/jquery.backstretch.js" type="text/javascript"></script>
        <script type="text/javascript">
            'use strict';

            /* ========================== */
            /* ::::::: Backstrech ::::::: */
            /* ========================== */
            // You may also attach Backstretch to a block-level element
            $.backstretch(
        [
           // "registration Form/img/44.jpg",
            "registration Form/img/colorful.jpg",
            "registration Form/img/34.jpg",
            "registration Form/img/images.jpg"
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
        </script>

</body>
</html>








