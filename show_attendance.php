
<?php
session_start();
include_once'query.php';
$obj=new query();
$res=$obj->load_attendance();
echo "REC".mysql_num_rows($res);
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
                <li><a href="student_home.php">Home</a>
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
                        <div class="col-lg-2"></div>

            <div class="col-xs-12" style="background:#30C">
            <div class="project details">
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <fieldset>
                                    
                     <div class="form-group">
                        <div class="row" style="font-size:18px;">
                             <div class="col-lg-1">Name</div>
                             <div class="col-lg-1">Register no</div>
                             <div class="col-lg-1">month1</div>
                             <div class="col-lg-1">month2</div>
                             <div class="col-lg-1">month3</div>
                             <div class="col-lg-1">month4</div>
                             <div class="col-lg-1">total</div>
                         </div>
                        </div>
                        <?php 
							while($row=mysql_fetch_assoc($res))
							{
								?>
                                
                        <div class="form-group">
                        <div class="row" style="font-size:18px;">
                             <div class="col-lg-1"><?php echo $i;?></div>
                             <div class="col-lg-1"><?php echo $row['name'];?></div>
                             <div class="col-lg-1"><?php echo $row['rollno'];?></div>
                             <div class="col-lg-1"><?php echo $row['month1'];?></div>
                             <div class="col-lg-1"><?php echo $row['month2'];?></div>
                             <div class="col-lg-1"><?php echo $row['month3'];?></div>
                             <div class="col-lg-1"><?php echo $row['month4'];?></div>
                             <div class="col-lg-1"><?php echo $row['total'];?></div>
                             </div>
                        </div>
                        <?php
						}
						
						
						?>
                        
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








