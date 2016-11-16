<?php
include_once("query.php"); 	
$obj=new query();
$cate=$_GET["cate"];
$res1=$obj->getgallery($cate);
$res2=$obj->getgallery($cate);
$res3=$obj->getgallery($cate);
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<!--gallery-->

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
.style2 {font-size: 36px}
-->
</style>
<script src="animation/js/wow.min.js"></script>
<link href="animation/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
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
                    <li><a href="faculty.php">Faculty</a></li>
                    <li><a href="project_show.php">Project Details</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li   class="active"><a href="gallery.php">Gallery</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                   <!-- <li><a href="slogin.php"><span class="glyphicon glyphicon-log-in"></span>Student Login</a></li>-->
                  </ul>
                </div><!-- /.navbar-collapse -->
                <!-- start soc_icons -->
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--SLIDER HERE START-->

<?php
if (mysql_num_rows($res1)==0){
	echo "No photos in this category !";
	exit();
}
else{
?>
<br/>
<div class="col-sm-8 col-sm-push-2">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <?php
      $i=0;
        while($row=mysql_fetch_array($res1)){
            
          ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" <?php if($i==0){?> class="active" <?php }?>>
          </li>
          
       <?php $i++; 
        }?>
      
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
      <?php $i=0;
        while($row2=mysql_fetch_array($res2)){ ?>
            <div class="item <?php if($i==0){?> active<?php }?>">
              <img class="img-responsive" src="<?php echo "gallery/".$cate."/".$row2[1];?>" alt="Gallery Image">
            </div>
       <?php $i++; }?>
      </div>
    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
     
    </div>
    <h3 ><label class="label label-success col-sm-12">Gallery</label></h3>
    <?php $i=0;
        while($row3=mysql_fetch_array($res3)){ ?>
            <div  class = "thumbnail col-sm-2">
              <img class="img-responsive" src="<?php echo "gallery/".$cate."/".$row3[1];?>" alt="Gallery Image" style="width:100%;height:150px";>
            </div>
       <?php $i++; }?>
</div>
<?php }?>
<!--SLIDER HERE END-->



	
</body>
</html>
