<?php
session_start();
include_once "query2.php";
$obj2=new query2();

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
<style>

.registrationform{
	font-size:12px;
}
</style>
  
<body>

<div class="row header header_bg1" style="padding-top:5px;padding-bottom:5px;" >
    <div class="logo navbar-left">
        <h3 style="padding-left:50px;"><span class="style1"><h2><div class="copy wow fadeInRight" data-wow-delay="0.4s">Master Of Computer Applications</div></h2></span></h3>
        
  </div>
    <div class="h_search navbar-right">
    </div>
    <div class="clearfix"></div>
    <div class="container" style="margin-top:30px;">
    	<!--<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
        <div class="navbar-header"><a class="navbar-brand" href="#"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>-->
        <!--<div class="collapse navbar-collapse navbar-menubuilder">-->
            
        </div>

</div>

<br/>
<ul class="nav navbar-nav navbar-right">
    <li><a href="profileuser.php">Home</a></li>
</ul>
<div class="clearfix"></div>
<div class="container">
            <div class="registrationform">
            <?php if(!empty($_GET['msg'])){?><div style="background:#0F6;padding:5px"><?php echo $_GET['msg']; ?></div><?php } ?>

            <form class="form-horizontal" method="post" action="message_process.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>Message Details<i class="fa fa-pencil pull-right"></i></legend>
                    
                         <div class="form-group">
			             <label for="textArea" class="col-lg-2 control-label">
                          Sem</label>
                          <div class="col-lg-10">
			             <select style="color:#000;background:#CCC;width:80%" class="form-control" name="sem">
                                        <option value="0">Select</option>
                                         <option value="1">1 </option>
                                         <option value="2">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="6">6</option>
                                    	</select>
			                        </div>
                                    
                             </div>       
                           <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                          Title</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="education" style="background:#F5F19C" name="title"></textarea><label id="ledu"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                    
                       <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                          Details</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="4" id="education" style="background:#F5F19C" name="details"></textarea><label id="ledu"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="dob" class="col-lg-2 control-label">
                            date of issue</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                            <input type="date" class="form-control" style="background:#F5F19C"name="date" id="date"/><label id="ldob"></label>
                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                   <div class="clearfix"></div>
                   </br>
                    
                              <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-warning">
                                Cancel</button>
                            <input type="submit" class="btn btn-primary" onClick="return formvalid()">
                                
                        </div>
                    </div>
                    
                                    
                                   
                    
                </fieldset>
            </form>
         </div>



         </div>
</div>
  
</body>
</html>
