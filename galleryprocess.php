<?php
session_start();
include_once("query.php");
$obj=new query();
$cate=$_POST['selcat'];
if($_FILES["gal_photo"]['name']!=''){
	$ph=$_FILES["gal_photo"]['name'];
	move_uploaded_file($_FILES["gal_photo"]['tmp_name'],"gallery/".$cate."/".$ph);
	//$result= $obj->gallery($ph,'Carricular');
	$result= $obj->gallery($ph,$cate);
}

header('location:admingallery.php');

?>
