<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <script src="reg_valid.js"></script> 
    <!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if IE 9]> <html class="no-js ie9 oldie" lang="en"> <![endif]-->
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
   
    <title></title>
  
    <!-- ============ Google fonts ============ -->
    <!--<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' /> -->
    <!-- ============ Add custom CSS here ============ -->
    <link href="registration Form/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="registration Form/css/style.css" rel="stylesheet" type="text/css" />    
   
    <link href="registration Form/css/font-awesome.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header"><a class="navbar-brand" href="#"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a>
                </li>
                
            </ul>
        </div>
    </div>
</div>

        <!--<div class="container">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
           <div id="banner">
             <h1>Bootstrap <strong>Registration Form</strong> for .net developers</h1>

            <h5><strong>aspxtemplates.com</strong></h5>
           
           </div>-->
          
              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="studregistrationform">
            <form class="form-horizontal" method="post" action="process3.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>Student Registration<i class="fa fa-pencil pull-right"></i></legend>
                              	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name"></label>
			                        	Name<input type="text" name="name" id="name"  class="form-first-name form-control" id="form-first-name"><label id="lname1"></label>
			                        </div>
                                    <div class="form-group">
                        <label class="col-lg-2 control-label">
                         Gender</label>
                        <div class="col-lg-10">
                            <label class="radio-inline"><input type="radio" name="radio" value="male" id="gender1">male</label>
<label class="radio-inline"><input type="radio" name="radio" id="gender2" value="female">female</label>
<label id="lgender"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-lg-2 control-label">
                            date of birth</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                            <input type="date" class="form-control" name="date" id="dob"/><label id="ldob"></label>
                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Guardian's name</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="guard" name="guard"></textarea><label id="ldesig"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Rollno</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="5" id="rno" name="rno"></textarea><label id="ledu"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                   <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Address</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="5" id="addr" name="addr"></textarea><label id="lexp"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                   
                     
                       <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Mobile No</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="mobile" name="mobile"></textarea><label id="lmobile"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            E_mail</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="email" name="mail"></textarea><label id="lmail"></label>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
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
        <script type="text/javascript">
            'use strict';

            /* ========================== */
            /* ::::::: Backstrech ::::::: */
            /* ========================== */
            // You may also attach Backstretch to a block-level element
            $.backstretch(
        [
            "registration Form/img/44.jpg",
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
