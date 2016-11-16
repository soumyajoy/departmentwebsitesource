<?php
//session_start();
//$id=$_SESSION["loginid"];
//$username=$_SESSION["username"];
include_once("query.php");
$sname=$_POST["sname"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$gname=$_POST["gname"];
$rollno=$_POST["rollno"];
$address=$_POST["address"];
$email=$_POST["email"];
$phno=$_POST["phno"];
$obj=new query();
$result= $obj->insert_studentreg($sname,$gender,$dob,$gname,$rollno,$address,$email,$phno);
   
if($result)
{
//$obj->update_status($id);
header('location:studreg.php');
}
else
{
	echo "Insertion Failed";
}
?>
