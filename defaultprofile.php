<?php
session_start(); 
$i=$_SESSION["loginid"];

	include_once("query.php");
	
					$obj=new query();
					 $details=$obj->fetchstaff($i);
						 $r=mysql_fetch_array($details);
						 $_SESSION["name"]=$r[1];
						 ?>
						 <?php file_put_contents('profiles.php', $r['2']);
 header("location:profiles.php");
 ?>