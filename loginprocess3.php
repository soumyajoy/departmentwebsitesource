<?php 
session_start();
$uname=$_POST["un"];
$pwd=$_POST["pswd"];
include_once("query.php");
	
					$obj=new query();
					$result=$_POST["status"]
							
	if ($result == 0) { 
	                     $row=mysql_fetch_array($result);
						 $details=$obj->details($row[0]);
						 $row1=mysql_fetch_array($details);
						 $_SESSION["username]=$row1[1];
						 $_SESSION["password"]=$row1[2];
						 header("location:reg.php");
						 
					}
	else
					{
					
						header("location:login.php");
						
					}
?>