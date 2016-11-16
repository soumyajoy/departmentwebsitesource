<?php
include_once 'query.php';
$obj=new query();
if(!empty($_GET['delid']))
{
	$id2=$_GET['delid'];
	$_SESSION['delid']=$id2;
	echo $id2;
	$result=$obj->delete_details($id2);
	unset($_SESSION['delid']);

header('location:delete_staff.php');
}

?>