<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();


	include_once("query.php"); 
	
	
					$obj=new query();
						 $image=$obj->image();

	 		 
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
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
.style2 {
	color: #000000;
	font-weight: bold;
	
}
-->
</style>
<script>
$( document ).ready(function() {

countt=$("#value-i").val();
for(j=1;j<=countt;j++){
imgname=$("#imgg-"+j).val();
name=$("#name-"+j).val();
desg=$("#desg-"+j).val();
prof=$("#profile-"+j).val();
//alert(imgname);
            $("#qwert").append('<li><div class="ch-item ch-img-1" style=background-image:url(upload/'+imgname+') ><div class="ch-info-wrap"><div class="ch-info"><div class="ch-info-front ch-img-1" style=background-image:url(upload/'+imgname+')></div><div class="ch-info-back"><h3>'+name+'</h3><p><h4><strong>'+desg+'</strong></h4><a href="'+prof+'"><h6>View Profile</h4></a></p></div></div></div></div></li>');
}
<?php /*?>$( "#result" ).css({
      "background-image":url(<?php echo $img[0]?>):,
	  ;
      "font-weight": "bolder"
    });<?php */?>
 
});
</script>
</head >
<body>
<form><?php $i=1;
while($r=mysql_fetch_array($image))
{?>
<input type="hidden" id="imgg-<?php echo $i; ?>" value="<?php echo $r[0]; ?>">
<input type="hidden" id="name-<?php echo $i; ?>" value="<?php echo $r[1]; ?>">
<input type="hidden" id="desg-<?php echo $i; ?>" value="<?php echo $r[2]; ?>">
<input type="hidden" id="profile-<?php echo $i; ?>" value="<?php echo $r[3]; ?>">
<?php
$i++;
 }
 
 ?>
 <input type="hidden" id="value-i" value="<?php echo $i-1;?>">
</form>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h3><span class="style1">Master of Computer Applications</span></a></h3>
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
		        <li   class="active"><a href="faculty.php">Faculty</a></li>
                <li><a href="project_show.php">Project Details</a></li>
		        <li><a href="contact.php">Contact</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            <!--    <li><a href="slogin.php"><span class="glyphicon glyphicon-log-in"></span>Student Login</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<!--<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>	
		</div>-->
	</div>
	<div class="clearfix"></div>
</div>
</div><div class="teachers" id="teach">
				  <h3 class="tittle">&nbsp;</h3>
					<div class="teachers-grids">
					<ul class="ch-grid">
                    <div id="qwert"></div>
				<?php /*?>	<li>
						<div class="ch-item ch-img-1">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Dr C Sathish Kumar</h3>
									  <p><h4><strong>Head Of The Department</strong></h4>
										<a href="#"><h6>View Profile</h4></a></p>
								  </div>	
								</div>
							</div>
						</div>
                  </li>
				  <li>
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h3>Tomsy Paul</h3>
										<p><h4><strong>Assistant Professor</strong></h4>
										<a href="#"><h6>View Profile</h4></a></p>
									</div>
								</div>
							</div>
						</div>
                  </li>
                  <li>
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h3>Athira Krishnan</h3>
										<p><h4><strong>Asst.Prof (Adhoc)</strong></h4>
										<a href="#"><h6>View Profile</h4></a></p>
									</div>
								</div>
							</div>
						</div>
                    </li>
                    <li>
						<div class="ch-item ch-img-4">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"></div>
									<div class="ch-info-back">
										<h3>Riyas E</h3>
									  <p><h4><strong>Asst.Prof (Adhoc)</strong></h4>
										<a href="#"><h6>View Profile</h4></a></p>
								  </div>	
								</div>
							</div>
						</div>
                   </li>
                   <li>  
						<div class="ch-item ch-img-5">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-5"></div>
									<div class="ch-info-back">
										<h3>SMITHA MATHEW</h3>
									  <p><h4 class="style2">Asst.Prof (Adhoc)</h4>
										<a href="#"><h6>View Profile</h4></a></p>
								  </div>	
								</div>
							</div>
						</div>
                 </li>
                 <li>
						<div class="ch-item ch-img-6">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-6"></div>
									<div class="ch-info-back">
										<h3>SONUPRIYA P S</h3>
									  <p><h4><strong>Asst.Prof(Adhoc)</strong></h3>
										<a href="#"><h6>View Profile</h4></a></p>
								  </div>	
								</div>
							</div>
						</div>
                 </li>
                 <li>
						<div class="ch-item ch-img-7">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-7"></div>
									<div class="ch-info-back">
										<h3>Anjana Sekhar</h3>
									  <p><h4 class="style2">Asst.Prof(Adhoc</h4>
										<a href="#"><h6>View Profile</h4></a></p>
								  </div>	
								</div>
							</div>
						</div>
                </li><?php */?>
						
			</div>
	</div>
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
								<a href="login.php">Login</a>
							</p>
						</div>
					</div>

					</footer2>
</body>
</html>