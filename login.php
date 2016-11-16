<!DOCTYPE html>
<html>	
<head>
<title>Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="valid_login.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Kipy Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="loginform/web/css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<br>
<br>
<?php if(!empty($_GET['msg'])){?><div style="background:#0F6;padding:5px"><?php echo $_GET['msg']; ?></div><?php } ?>
<div class="login-form">
		<h2>Login</h2>
			<div class="form-info">
					<form method="post" action="loginprocess.php">
							<input type="text" class="email" id="username" placeholder="username"  name="un"/>
                            <label id="lusername"></label>
							<input type="password" class="password" placeholder="Password"  id="password"  name="pswd"/>
                            <label id="lpassword"></label>
							<p><a href="#">Forgot password?</a></p>
						<ul class="login-buttons">
							<li><input type="submit" value="LOGIN" onClick="return formvalid()"/></li>
							<!--<li><a href="reg.php" class="hvr-sweep-to-left">REGISTER</a></li>-->
							<div class="clear"> </div>
						</ul>
					</form>
			</div>
	</div>
<!--copyrights-->
<div class="copyrights">
	<p><a href="index.php">HOME</a></p>
</div>
<!--/copyrights-->
</body>
</html>