<?php
session_start();
$sem=$_POST['sem'];
$title=$_POST['title'];
$details=$_POST['details'];
$date=$_POST['date'];
include_once("query.php");
$obj=new query();
$result= $obj->insert_message($sem,$title,$details,$date);
//if($result)
//{
//	$msg=urldecode('Message Saved !');
//}
header('location:message.php');
?>
