<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="movetop/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="movetop/css/chocolat.css" type="text/css" media="screen" />

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
<script src="animation/js/wow.min.js"></script>
<link href="animation/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
.form_fiels{
	font-size:14px !important;
}
</style>
<script src="reg_valid.js"></script> 
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
	
	</div>
	<div class="clearfix"></div>
</div>
        <br/>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="adminhome.php">Home</a></li>
        </ul>
        
<div class="clearfix"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sm-push-3">
            <div class="registrationform form_fiels ">
            <form class="form-horizontal" method="post" action="process.php" enctype="multipart/form-data">
                <h3>Registration<i class="fa fa-pencil pull-right"></i></h3>
                      <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">
                            Name</label>
                            <div class="col-lg-10">
                            <input type="text" style="background:#F5F19C" name="name" id="name1"  class="form-first-name form-control" id="form-first-name"><label id="lname1"></label>
                            </div>
			          </div>
                      <div class="form-group">
                      	<label for="textArea" class="col-lg-2 control-label">
                            Gender</label>
                       		<div class="col-lg-10">
                                <label class="radio-inline"><input type="radio" name="radio" value="male" id="gender1">male</label>
    <label class="radio-inline"><input type="radio" name="radio" id="gender2" value="female">female</label>
    <label id="lgender"></label>
                            </div>
                      </div>
                    <div class="form-group">
                        	<label for="textArea" class="col-lg-2 control-label">
                             date of birth</label>
                             <div class="input-group col-lg-4">
                                <div class="input-group">
                                    <input type="date" class="form-control" style="background:#F5F19C" name="date" id="dob"/><label id="ldob"></label>
                                    <span class="input-group-addon"></span>
                                </div>
                            </div>
                        
                    </div>
                    <div class="clearfix"></div>
                        <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Designation</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="designation" style="background:#F5F19C" name="desig"></textarea><label id="ldesig"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Education</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="5" id="education"style="background:#F5F19C" name="education"></textarea><label id="ledu"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                   <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Experience</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="5" id="experience"style="background:#F5F19C" name="experience"></textarea><label id="lexp"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Area Of Interest</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="area" style="background:#F5F19C"  name="area"></textarea><label id="larea"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Specialized Training</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="training" style="background:#F5F19C" name="training"></textarea><label id="ltrain"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Papers Published</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="papers" style="background:#F5F19C" name="papers"></textarea><label id="lpaper"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Mobile No</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="mobile"style="background:#F5F19C"  name="mobile"></textarea><label id="lmobile"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            E_mail</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="email" style="background:#F5F19C" name="mail"></textarea><label id="lmail"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Profile photo</label>
                        <div class="col-lg-10">
                            <input type="file" name="profileimg" id="photo"/><label id="lphoto"></label>
                        </div>
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
        

</body>
</html>
