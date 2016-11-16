<?php 
session_start();
$uname=$_POST["un"];
$pwd=$_POST["pswd"];
include_once("query.php");
	
					$obj=new query();
					$result=$obj->insert_login($uname,$pwd);
					
?>