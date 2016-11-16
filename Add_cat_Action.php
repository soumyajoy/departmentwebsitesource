<?php
session_start();
$cat=$_POST['txtcat'];

include_once("query.php");
$obj=new query();
$res= $obj->check_category_exist($cat);
if(mysql_num_rows($res)>0){
	$_SESSION['err_msg']="Category already exist !";
}
else{
	$result= $obj->add_category($cat);
	if (!file_exists('gallery/'.$cat)) {
		mkdir('gallery/'.$cat, 0777, true);
	}
	$_SESSION['success_msg']="New category created !";
}
//if($result)
//{
//	$msg=urldecode('Category added sucessfully !');
//}
//header('location:category.php?msg='.$msg);
header('location:category.php');
?>
