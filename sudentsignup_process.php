<?php 
session_start();
$adm_no=$_POST["adm_no"];   
$email=$_POST["email"];
$pswd=$_POST["pswd"];
include_once("query.php");
$obj=new query();
$result=$obj->studentsignup($adm_no,$email,$pswd);
if ($result){
		$_SESSION['msg']="Success";
}
header("location:student_signup.php"); 
	
?>