<?php 
session_start();
$uname=$_POST["un"];
$pwd=$_POST["pswd"];
include_once("query.php");
	
					$obj=new query();
					$result=$obj->login($uname,$pwd);
					$numrows = mysql_num_rows($result);
					
	if ($numrows == 1) { 
						 $row=mysql_fetch_array($result);
						 $details=$obj->details($row[0]);
						 $row1=mysql_fetch_array($details);
						 $_SESSION["loginid"]=$row1[10];
						 $_SESSION["name"]=$row1[1];
						 header("location:about.php");
						 
					}
	else
					{
					
						header("location:login.php");
						
					}
?>