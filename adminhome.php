<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Dropdown Menu</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="admin/js/jquery.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	</head>
		<body>
			<!----start-body------->
			<!----star-wrapper-demo------->
			<div class="wrapper-demo">
				<!-----start-wrapper-dropdown-2---->
					<div id="dd" class="wrapper-dropdown-2" tabindex="1">ADMIN SETTINGS<span><img src="admin/images/menu.png"/></span>
							<ul class="dropdown">
							
									<li><a href="admingallery.php">upload gallery photos<span class="icon"> </span></a></li>
                                    <li><a href="category.php">Add Category/Delete Category<span class="icon"> </span></a></li>
                                   
									<li><a href="reg.php">Staff Registration<span class="icon stat"> </span></a></li>
                                    <li><a href="delete_staff.php">Delete Staff<span class="icon stat"> </span></a></li>
                                    <li><a href="generation.php">Generate Passwords<span class="icon stat"> </span></a></li>
                                    <li><a href="internalreg.php">Internal marks<span class="icon stat"> </span></a></li>
                                    <li><a href="attendencereg.php">Attendance Details<span class="icon stat"> </span></a></li>
                               <!--     <li><a href="studreg.php">Student Registration<span class="icon stat"> </span></a></li>
                                    <li><a href="generation_stud.php">Generate Passwords for Students<span class="icon stat"> </span></a></li>-->
                                    <li><a href="project.php">Project Details<span class="icon stat"> </span></a></li>
									<li><a href="login.php">Signout<span class="icon signout"> </span></a></li>
							</ul>
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
									$('.wrapper-dropdown-2').removeClass('active');
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