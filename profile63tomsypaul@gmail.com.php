<?php
session_start();
$PROF= $_SERVER["PHP_SELF"];
$id=preg_split("/\//",$PROF);
$id=preg_split("/[\D]/",$id[ sizeof($id)-1]);

$id=$id[7];
	include_once("../query.php");
	
					$obj=new query();
					 $details=$obj->details($id);
   					 $areaofinterest=$obj->areaofinterest($id);
					 $education=$obj->education($id);
						 $res=$obj->details($id);
						 $r=mysql_fetch_array($res);
						$ab=mysql_fetch_array($areaofinterest);
						$ed=mysql_fetch_array($education);
						$abr=explode(",",$ab[0]);
						$edr=explode(",",$ed[0]);
									
								 		 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>
<script src="../animation/js/wow.min.js"></script>
<link href="../animation/css/animate.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap -->
    <link href="../home/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../home/css/font-awesome.css">
	<link rel="stylesheet" href="../home/css/animate.css">
	<link href="../home/css/theme.css" rel="stylesheet">
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
			<!--about us-->
	<section class="aboutus" id="aboutus">
		<div class="container">
			<div class="heading text-center">				
				<h2>Master of cmputer applications</h2>				
			</div>			
			<div class="row">
				<div class="col-md-6">
					<div class="papers text-center">
						<img src="../upload/<?php echo $r[12];?>" alt=""><br/>
                        <h5 class="bg-success"><?php echo $r[1];?></h5>
                        <h5 class="bg-danger wow fadeInLeft"><?php echo $r[4];?></h5>
					</div>
				</div>
				<div class="col-md-6">
					<div class="papers text-center">
						<ul class="about-details">
							<li><p>Date of birth:<span><?php echo $r[3];?></span></p></li>
							<li><p>Mobile:<span><?php echo $r[10];?></span></p></li>
							<li><p>Email: <span><a href="mailto:example@gmail.com"><?php echo $r[11];?></a></span></p></li>
							<li><p>Address: <span></span></p></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</section>
	

<!--education-->
	<section class="feedback" id="education">
		<div class="container">
			<div class="heading">
				<h2 class="label-success">Education</h2>
		</div>
		<?php 
		foreach ($edr as $edu)
		{
		?>
		<div class="container">
			<div class="col-md-12 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
				<div class="text-center">
					<div class="hi-icon-wrap hi-icon-effect">	
                   				 <?php echo $edu;?>							
					</div>
				</div>	
			</div>
			
		 <?php
		   }
		 ?>
		</div>
    </section>
	
	<!--education-->
    <!--education-->
	<section class="feedback" id="experience">
		<div class="container">
			<div class="heading">
				<h2 class=" label-info">Experien</h2>
						
		</div>
		
		<div class="container">
			<div class="col-md-12 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
				<div class="text-center">
                <?php echo $r[6];?>
					
			</div>
                        

		</div>
   </section>
	
	<!--education-->
    <!--education-->
	<section class="feedback" id="areaofinterest">
		<div class="container">
        			<div class="heading">
				<h2 class="label-danger">Area Of Interest</h2>
			</div>			
		</div>
		
		<div class="container">
	<?php
	foreach($abr as $a){
	?>		<div class="col-md-12 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
				<div class="text-center">
                
                <?php echo $a?>
               			                     
				</div>	
			</div>
			
            <?php
			}
			?>
			<div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
				<?php //echo $abr[1];?>
                
					<div class="hi-icon-wrap hi-icon-effect">	
                    											
							
			</div>
			
			
                        

		</div>
   </section>
	
	<!--education-->
        <!--education-->
	<section class="feedback" id="training">
		<div class="container">
			<div class="heading">
				<h2 class="label-default">specialized training</h2>
				
			</div>			
		</div>
		
		<div class="container">
			<div class="col-md-12 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
				<div class="text-center">
                <?php echo $r[8];?>
					
                        

		</div>
   </section>
	
	<!--education-->
    
	<!--portfolio-->
	
	        <!--education-->
	<section class="feedback" id="papers">
		<div class="container">
			<div class="heading">
				<h2 class="label-info">Papers published</h2>
							</div>			
		</div>
		
		<div class="container">
			<div class="col-md-12 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
				<div class="text-center">
                <?php echo $r[9];?>
					
                        <?php echo $r[9];?>

		</div>
   </section>
	
	<!--education-->
	  
	<!--footer-->
			
	</div>
    <script src="../home/js/jquery.js"></script>
	<script src="../home/js/modernizr.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../home/js/bootstrap.min.js"></script>
	<script src="../home/js/menustick.js"></script>
	<script src="../home/js/parallax.js"></script>
	<script src="../home/js/easing.js"></script>
	<script src="../home/js/wow.js"></script>
	<script src="../home/js/smoothscroll.js"></script>
	<script src="../home/js/masonry.js"></script>
	<script src="../home/js/imgloaded.js"></script>
	<script src="../home/js/classie.js"></script>
	<script src="../home/js/colorfinder.js"></script>
	<script src="../home/js/gridscroll.js"></script>
	<script src="../home/js/contact.js"></script>
	<script src="../home/js/common.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
	<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'specialties',
		  3: 'gallery',
		  4: 'feedback',
		  5: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
});
</script>
  </body>
</html>