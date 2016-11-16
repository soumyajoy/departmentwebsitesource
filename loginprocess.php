<?php 
session_start();
$uname=$_POST["un"];
$pwd=$_POST["pswd"];
include_once("query.php");

	$obj=new query();
	$result=$obj->login($uname,$pwd);
	$numrows = mysql_num_rows($result);
	if ($numrows == 1) { 
	$row=mysql_fetch_array($result);
	echo $row[3];
	$_SESSION["loginid"]=$row[0];
	$_SESSION["username"]=$uname;
	if($row[3]=="admin@mca.rit.ac.in") 
	{
		header("location:adminhome.php");
	}
	elseif($row[3]=="staff"){
			if($row[4]==1)
			{
				header("location:reg.php");
						 
			}
			else
			{
				header("location:profileuser.php");
			}
		}
		elseif($row[3]=="techstaff"){
			if($row[4]==1){
				header("location:reg.php");
			}
			else{
				header("location:profileuser.php");
			}
		}
						 
		}
	else{
				
				$result=$obj->student_login($uname,$pwd);
				$numrows = mysql_num_rows($result);
				if ($numrows > 0) {
					$row=mysql_fetch_assoc($result);
					if(!empty($row['ad_no']))
					{
						$_SESSION['admission_no']=$row['ad_no'];
						
					}
					
					header("location:student_home.php"); 
				}
				else
				{
					$msg=urlencode("Invalid Login");
					header("location:login.php?msg=".$msg);
				}
			}
?>