<?php
session_start(); 
$i=$_SESSION["loginid"];

	include_once("query.php");
	
					$obj=new query();
					 $details=$obj->details($i);
					  $r=mysql_fetch_array($details);
					    $_SESSION["name"]=$r[1];
	 		 
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <div>
      
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="message.php"><span class="glyphicon glyphicon-user"></span>Add Notification</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span>Home</a></li>
        <li><a href="changecontent.php"><span class="glyphicon glyphicon-edit"></span>Edit code</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
  </nav>
  <?php echo "User". $_SESSION['username'];  ?>
  <iframe src="<?php echo 'profile/profile'.$i.$_SESSION["username"].'.php'; ?>" height="900px" width="1000"></iframe>
</html>
