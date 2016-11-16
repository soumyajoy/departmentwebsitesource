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
    <li><a href="adminhome.php">Home</a></li>
</ul>
<div class="container">    
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <div class="registrationform">
        <?php if(!empty($_GET['msg'])){?><div style="background:#0F6;padding:5px"><?php echo $_GET['msg']; ?></div><?php } ?>

        <form class="form-horizontal" method="post" action="internalprocess.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Internal Mark Details<i class="fa fa-pencil pull-right"></i></legend>
                
                <div class="form-group">
                <label class="sr-only" for="form-first-name"></label>             <?php $res1=$obj2->select_all_banch(); ?>
                 Branch
                 <select style="color:#000;background:#CCC;width:80%" class="form-control" name="branch" id="sel_branch"> 
                      <option>Select </option>
                     <?php while($row1=mysql_fetch_assoc($res1)){ ?>
                      <option value="<?php echo $row1['branch']; ?>"><?php echo $row1['branch']; ?></option>
                     <?php }?>
                 </select>
                </div>
                <div class="form-group">
                                <label class="sr-only" for="form-first-name"></label>
                               
                                <?php $res2=$obj2->select_all_year(); ?>
                                Year
                                <select style="color:#000;background:#CCC;width:80%" class="form-control" name="year" id="adm_year">
                                     <option>Select </option> 
                                    
                                    <?php
										$ad_year=array();
										 while($row2=mysql_fetch_assoc($res2)){ 
										$ad_year=explode("/",$row2['yr_adm']); 
										$ad_yr=$ad_year[count($ad_year)-1]
										?>
                                         <option value="<?php echo $ad_yr; ?>"><?php echo $ad_yr; ?></option>
                                         <?php }?>
                                </select>
                            </div>
                <div class="form-group">
                                <label class="sr-only" for="form-first-name">  </label>
                              
                                <?php $res3=$obj2->select_all_student('CA','2013'); ?>
                               
                                Name
                                <select style="color:#000;background:#CCC;width:80%" class="form-control" id="sel_stud" name="name"> 
                                     <option>Select </option>
                                    
                                    
                                </select>
                            </div> 
                
                <div class="form-group">
                                    <label class="sr-only" for="form-first-name"></label>
                                    Sem
                                    <select id="sel_sem" style="color:#000;background:#CCC;width:80%" class="form-control" name="sem">
                                    <option value="0">Select</option>
                                     <option value="1">1 </option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                     <option value="4">4</option>
                                     <option value="5">5</option>
                                     <option value="6">6</option>
                                    </select>
                                </div>
                            <div class="form-group" id="sub_marks">
                            </div>     
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
            /*"registration Form/img/44.jpg",
            "registration Form/img/colorful.jpg",
            "registration Form/img/34.jpg",
            "registration Form/img/images.jpg"*/
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
        </script>
        
        <script> 
     $(document).ready(function() {     
		 
		$('#sel_sem').on('change', function () {
			var sem_id = $(this).val();
			var j_action = "load_subjects_of_sem";
			$.post('jquery_loadings.php',{ j_process:j_action, sem:sem_id }, function(data){
                var response = data.replace(/^\s*|\s*$/g,'');
				
                 $('#sub_marks').html(response);
				
                });    
            });
			
			$('#adm_year').on('change', function () {
			var ad_year = $(this).val();
			var branch_id = $('#sel_branch').val();
			
			//alert(ad_year); 
            var j_action = "load_students_of_year";
			$.post('jquery_loadings.php',{ j_process:j_action, adm_year:ad_year,branchid:branch_id }, function(data){
                var response = data.replace(/^\s*|\s*$/g,'');
				//alert(response);
                 $('#sel_stud').html(response);
				
                });    
            });
	});
</script>

       

</body>
</html>
