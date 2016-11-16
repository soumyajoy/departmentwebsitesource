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
  <ul class="nav navbar-nav navbar-right">
            <li><a href="adminhome.php">Home</a></li>
        </ul>
      <h3><label class="label label-primary col-sm-6 col-sm-push-3">Add Photos</label></h3>
      <div class="clearfix"></div>
        <?php
			include_once("query.php"); 	
			$obj=new query();
			$res1=$obj->view_category();
		?>
			<div class="container">
            	<div class="col-sm-6  col-sm-push-3">
                 <form action="galleryprocess.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                            <select name="selcat" class="form-control">
                                <option value="">Select</option>
                                <?php while($row=mysql_fetch_assoc($res1)) { ?>										<option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
                                <?php }?> 
                           </select>
                       </div>
                       <div class="form-group">
                       		<input type="file" class="form-control"  name="gal_photo" id="photo" /></span></a>			</div>
                		<div class="form-group">
                <input type="submit" class="btn btn-success">
                </div>
                </form>
                
				</div>
			</div>
			<!-----end-wrapper-dropdown-2---->
			<!-----start-script---->
			<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd = new DropDown( $('#dd') );
				
								$(document).click(function() {
									// all dropdowns
									/*$('.wrapper-dropdown-2').removeClass('active');*/
								});
				
							});
			</script>
			<!-----end-script---->
			<!----end-wrapper-demo----->
			<!-----start-copyright---->
			<div class="copy-right">
					<p>&nbsp;</p>
			</div>
			<!-----end-copyright---->
			<!----end-body------->
	</body>
</html>