<?php
include_once 'query.php';
$obj=new query();
if(!empty($_GET['cid']))
{
	$id2=$_GET['cid'];
	$_SESSION['cid']=$id2;
	echo $id2;
	$result=$obj->category_details($id2);
	unset($_SESSION['cid']);

header('location:category.php');
}

?>