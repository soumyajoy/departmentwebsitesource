<?php
//session_start();
//$id=$_SESSION["loginid"];
//$username=$_SESSION["username"];
include_once("query.php");
$sname=$_POST["sname"];
$pname=$_POST["pname"];
$description=$_POST["description"];
$date=$_POST["date"];
$obj=new query();
$result= $obj->insert_project($sname,$pname,$description,$date);

if($result)
{
//$obj->update_status($id);
header('location:project.php');
}
else
{
	echo "Insertion Failed";
}
?>
