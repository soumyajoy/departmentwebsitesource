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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
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
        </div>
    </div>
</div>
<br/>
<ul class="nav navbar-nav navbar-right">
            <li><a href="adminhome.php">Home</a></li>
        </ul>
<div class="clearfix"></div>
<h3><label class="label label-primary col-sm-6 col-sm-push-3">Staff details</label></h3>
<div class="clearfix"></div>
<?php
include_once 'query.php';
$obj=new query();
//$uv=$_COOKIE['user1'];
//echo $uv;
$res=$obj->view_details();
?>
<?php if(!empty($_GET['delid1']) && $_GET['delid1']>0 ){ $del_id= $_GET['delid1'];?>
<div class="alert">
	<p>Do you want to delete record ?</p><br/>
    <a style="margin-right:10px;" href="DeleteAction.php?delid=<?php echo $del_id;?>" class="btn btn-danger btn-sm">Yes</a><a href="delete_staff.php" class="btn btn-primary btn-sm">No</a>
    
</div>
<?php } ?>
<?php
if(!empty($res)){ ?>
<table class="table table-striped" >
    <tr>
        <td>Sl No.</td>
        <td>Name</td>
        <td>Gender</td>
        <td>DOB</td>
        <td>Designation</td>
        <td>Course studied</td>
        <td>Experience</td>
        <td>Area of Interst</td>
        <td>Training</td>
        <td>Papaers published</td>
        <td>Mobile number</td>
        <td>Email</td>
        <td>Photo</td>
    </tr>
<?php
  $i=1;
  while($row=mysql_fetch_assoc($res))
  { 
    ?>
    <tr>
    <td><?php echo $i;?></td>
	<td>
    <?php
	echo $row['name'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['gender'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['dob'];
    ?>
    </td>
    
    
    <td>
    <?php
	echo $row['designation'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['course_studied'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['experience'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['area_of_interest'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['training'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['papers_published'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['mobile_no'];
    ?>
    </td>
    
    <td>
    <?php
	echo $row['e_mail'];
    ?>
    </td>
    
   <td><img src=" <?php echo "upload/".$row['profile_photo'];  ?>" height="75px" width="75px"</td>
   
                    
                    <td><a href="delete_staff.php?delid1=<?php echo $row['id'];?>"> Delete</a></td>

    </tr>

    <?php
    $i++;
   
  }
  ?>
  </table>
  <?php
}

?>