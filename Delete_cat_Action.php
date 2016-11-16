<?php
include_once 'query.php';
$obj=new query();
if(!empty($_GET['delcat']))
{
	$delcat=$_GET['delcat'];
	if(!rmdir('gallery/'.$delcat))
		{
			$msg=("Could not remove $delcat");
		}
		else{
			$msg=("Could not remove $delcat");
		}
	$result=$obj->delete_category($delcat);
header('location:category.php?msg='.$msg);
}

?>