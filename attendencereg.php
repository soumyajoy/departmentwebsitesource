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
</style>
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
  		<div class="container">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-sm-push-2">
            <div class="registrationform">
            <?php if(!empty($_GET['msg'])){?><div style="background:#0F6;padding:5px"><?php echo $_GET['msg']; ?></div><?php } ?>

            <form class="form-horizontal" method="post" action="attendenceprocess.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>Attendence Details<i class="fa fa-pencil pull-right"></i></legend>
                    
                    <div class="form-group">
			        <label class="sr-only" for="form-first-name"></label>
			         <?php $res1=$obj2->select_all_banch(); ?>
                     Branch<select style="color:#000;background:#CCC;width:80%" class="form-control" name="branch"> 
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
                                    <select style="color:#000;background:#CCC;width:80%" class="form-control" name="year">
                                         <option>Select </option>
                                        
                                        <?php while($row2=mysql_fetch_assoc($res2)){ ?>
                                         <option value="<?php echo $row2['yr_adm']; ?>"><?php echo $row2['yr_adm']; ?></option>
                                         <?php }?>
                                    </select>
                                </div>
                    <div class="form-group">
			                    	<label class="sr-only" for="form-first-name">  </label>
			                      
                                    <?php $res3=$obj2->select_all_student('CA','2013'); ?>
                                   
                                    Name
                                    <select style="color:#000;background:#CCC;width:80%" class="form-control" name="name"> 
                                         <option>Select </option>
                                        
                                        <?php while($row3=mysql_fetch_assoc($res3)){ ?>
                                         <option value="<?php echo $row3['adm_no']; ?>"><?php echo $row3['name']; ?></option>
                                         <?php }?>
                                    </select>
                                </div>
                    
                              	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name"></label>
                                        Sem
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
                                    
                                    <div class="form-group">
                                    <div class="col-sm-6">
                                    <label class="sr-only" for="form-first-name"></label>
                                        Month
			                    		<select class="input1 form-control" name="month1">
                                         <option>Select </option>
                                        <?php $month_ar=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
										for($i=0;$i< count($month_ar);$i++)
										{?>
											<option value="<?php echo $i ?>"><?php echo $month_ar[$i]; ?></option>
										<?php }
										?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                    	<label class="sr-only" for="form-first-name"></label>
			                        	Percentage<input class="input1 form-control" type="text" style="background:#F5F19C" name="month1_per" id="mon2"  class="form-first-name form-control" id="form-first-name"><label id="lname1"></label>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-6">
                                    <label class="sr-only" for="form-first-name"></label>
                                        Month
			                    		<select class="input1 form-control" name="month2">
                                         <option>Select </option>
                                        <?php $month_ar=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
										for($i=0;$i< count($month_ar);$i++)
										{?>
											<option value="<?php echo $i ?>"><?php echo $month_ar[$i]; ?></option>
										<?php }
										?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                    	<label class="sr-only" for="form-first-name"></label>
			                        	Percentage<input class="input1 form-control" type="text"style="background:#F5F19C"  name="month2_per" id="mon2"  class="form-first-name form-control" id="form-first-name"><label id="lname1"></label>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-6">
                                    <label class="sr-only" for="form-first-name"></label>
                                        Month
			                    		<select class="input1 form-control" name="month3">
                                         <option>Select </option>
                                        <?php $month_ar=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
										for($i=0;$i< count($month_ar);$i++)
										{?>
											<option value="<?php echo $i ?>"><?php echo $month_ar[$i]; ?></option>
										<?php }
										?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                    	<label class="sr-only" for="form-first-name"></label>
			                        	Percentage<input class="input1 form-control" type="text" style="background:#F5F19C" name="month3_per" id="mon2"  class="form-first-name form-control" id="form-first-name"><label id="lname1"></label>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-6">
                                    <label class="sr-only" for="form-first-name"></label>
                                        Month
			                    		<select class="input1 form-control" name="month4">
                                         <option>Select </option>
                                        <?php $month_ar=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
										for($i=0;$i< count($month_ar);$i++)
										{?>
											<option value="<?php echo $i ?>"><?php echo $month_ar[$i]; ?></option>
										<?php }
										?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                    	<label class="sr-only" for="form-first-name"></label>
			                        	Percentage<input class="input1 form-control" type="text" style="background:#F5F19C" name="month4_per" id="mon2"  class="form-first-name form-control" id="form-first-name"><label id="lname1"></label>
                                    </div>
                                    </div>
                                    
                                     <!--<div class="form-group">
                        <label for="textArea" class="col-lg-6 control-label " name="total">
                          Total</label>-->
                        
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                       
                                    
                                    
                                    <!--<div class="col-sm-6">
                                    	<label class="sr-only" for="form-first-name"></label>
			                        	Percentage<input class="input1 form-control" type="text" name="month5_per" id="mon2"  class="form-first-name form-control" id="form-first-name"><label id="lname1"></label>
                                    </div>
                                    </div>-->
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
            
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
        </script>

</body>
</html>
