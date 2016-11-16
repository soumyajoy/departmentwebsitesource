
<?php
session_start();
include_once'query2.php';
$obj2=new query2();
include_once'query.php';
$obj=new query();
//print_r($_SESSION);
if(!empty($_SESSION['admission_no'])){
	$admission_no=$_SESSION['admission_no'];
	$sem_res=$obj2->get_semester($admission_no);
	$sem_row=mysql_fetch_assoc($sem_res);
	$sem=$sem_row['cur_sem'];
	
	$res=$obj->load_message($sem);
	$res2=$obj->load_message($sem);
}
else
{
	$msg="Please loging to continue !";
}
//echo "REC".mysql_num_rows($res);
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
table{
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
    <li><a href="student_home.php">Home</a></li>
</ul>
<div class="clearfix"></div>

      <div class="container">
      	<div class="col-sm-8 col-sm-push-2">
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <fieldset>
                  	<table class="table table-striped">
                          <tr>
                            <th class="col-lg-1">Sl. No</th>
                            <td class="col-lg-8">Message Title</td>
                            <td class="col-lg-2">Date</td>
                            <td class="col-lg-1">&nbsp;</td>
                          </tr>
                        <?php 
						$i=1;
							while($row=mysql_fetch_assoc($res))
							{
								?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['msg_title'];?></td>
                                <td><?php echo $row['msg_date'];?></td>
                                <td><span role="button" class="glyphicon glyphicon-arrow-right" data-toggle="modal" data-target="#myModal_<?php echo $i?>"></span></td>
                             </tr>
                                
                        <?php }?>
                        
                        </table>
                        </fieldset>
                        </form>
			<?php 
            $i=1;
            while($row=mysql_fetch_assoc($res2))
            {
                ?>
            <!-- Modal -->
            <div id="myModal_<?php echo $i?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                    <h4 class="modal-title"><?php echo $row['msg_title'];?></h4>
                  </div>
                  <div class="modal-body">
                    <p style="color:#006;"><?php echo $row['msg_details'];?> </p>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
            
              </div>
            </div>
      
            <?php
            $i++;}
            ?>
                        
         </div>     
        </div>
            
</body>
</html>








