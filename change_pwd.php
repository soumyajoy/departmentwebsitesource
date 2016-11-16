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
<link href="loginform/web/css/style.css" rel='stylesheet' type='text/css' />

<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<script src="animation/js/wow.min.js"></script>
<link href="animation/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<style type="text/css">
<!--
.style1 {color: #FFF

}
-->
</style>
</head>
<body>
<?php 
session_start();
if(!empty($_SESSION['msg']))
{
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
}
?>
<div class="header_bg1">
<div class="container">
	<div class="row header" style="padding-top:5px;padding-bottom:5px;" >
		<div class="logo navbar-left">
			<h3 style="font-weight:800 !important;"><span class="style1"><h2><div class="copy wow fadeInRight" data-wow-delay="0.4s">Master Of Computer Applications</div></h2></span></h3>
			
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
		        <li><a href="student_home.php">Home</a></li>
		      <!--  <li><a href="about.php">About</a></li>-->
		      <!--    <li><a href="course.php">Course</a></li>-->
		       <!--   <li><a href="Faculty.php">Faculty</a></li>-->
               <!--   <li><a href="project_show.php">Project Details</a></li>-->
		       <!--   <li><a href="contact.php">Contact</a></li>-->
                <!--  <li><a href="gallery.php">Gallery</a></li>-->
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
               <!-- <li><a href="slogin.php"><span class="glyphicon glyphicon-log-in"></span>Student Login</a></li>-->
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
			</ul>-->
		</div>
</div>
</div>
</div>

<!--<?php 
//session_start();
//if(!empty($_SESSION['msg'])){ unset($_SESSION['msg']);
 ?>
<div style="background:#0F6;padding:5px">Success
<?php /*?><? echo $_SESSION['msg']; ?></div><?php }?><?php */?>
<div class="container" style="min-height:500px;">-->

    <div class="login-form">
		<h2>Change Password</h2>
			<div class="form-info" >
					<!--<form method="post" action="sudentsignup_process.php"> -->
							<!--<input type="text" class="email"  placeholder="Admission no"  name="adm_no"/>
                            <label id="lusername"></label>
                            <input type="text" class="email"  placeholder="Email"  name="email"/>
                            <label id="lusername2"></label>
                            
							<input type="password" class="password" placeholder="Password"  id="password"  name="pswd"/>
                            <label id="lpassword"></label>-->
                            
                             <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>change password</title>
     </head>
    <body>
   <!-- <h1>Change Password</h1>-->
   <form method="POST" action="change_pwd_process.php">
   <style>
   
    table, th,td{border:1px solid black; padding:5px;}
	table {border-spacing:15px}
	</style>
    <table style="width:100%">
    <tr>
   <td><font color="#FFFFFF">UserName</font></td>
    <td><input type="username" size="10" name="username"></td>
    </tr>
    <tr>
    <td><font color="#FFFFFF">Existing password:</font></td>
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td><font color="#FFFFFF">New password:</font></td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td><font color="#FFFFFF">Re-enter your new password:</font></td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
                            
                            
						<!--<ul class="login-buttons">
							<li><input type="submit" value="Signup" onClick="return formvalid()"/></li>
							<!--<li><a href="reg.php" class="hvr-sweep-to-left">REGISTER</a></li>-->
							<div class="clear"> </div>
						</ul>
					</form>
			</div>
	
    
    
    </div>
  </div>
  <!--<div class="footer2" style="position:relative">
	<div class="row">
		<div class="col-md-6 panel">
			<div class="panel-body">
				<p class="simplenav">
                    <a href="index.php">Home</a> | 
                    <a href="about.php">About</a> |
                    <a href="course.php">Course</a> |
                    <a href="faculty.php">Staff</a> |
                    <a href="contact.php">Contact</a> |
                    <a href="gallery.php">Gallery</a> |
                    <a href="login.php">Login</a>
                </p>
			</div>
		</div>
		<div class="col-md-6 panel">
			<div class="panel-body">
				<p class="text-right">
			</p>
		</div>
	</div>
</div>
				<!-- /row of panels -->
 <!--</div>-->
  
   
   <!--<p><a href="home.php">Home</a>
   <p><a href="logout.php">Logout</a>-->
   </body>
    </html>  