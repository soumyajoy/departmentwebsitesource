<?php
session_start();
$id=$_SESSION["loginid"];
//$username=$_SESSION["username"].time();
$username=$_SESSION["username"];
include_once("query.php");
$n=$_POST["name"];
$ra=$_POST["radio"];
$dt=$_POST["date"];
$de=$_POST["desig"];
$ed=$_POST["education"];
$exp=$_POST["experience"];
$ar=$_POST["area"];
$tr=$_POST["training"];
$pp=$_POST["papers"];
$mob=$_POST["mobile"];

$mail=$_POST["mail"];
$_SESSION['new_user']=$mail;
$ph=$_FILES["profileimg"]['name'];
move_uploaded_file($_FILES["profileimg"]['tmp_name'],"upload/".$ph);
$obj=new query();
$result= $obj->insert_registration($n,$ra,$dt,$de,$ed,$exp,$ar,$tr,$pp,$mob,$mail,$ph,$id);
 
       $f = fopen('profiledummy.php',"r");
        $content = fread($f, filesize('profiledummy.php'));
        @fclose($f);
       $f = fopen('profile/profile'.$id.$mail.'.php',"w");
        fwrite($f, $content);
		$obj->profile_insert($id,'profile/profile'.$id.$username.'.php');
        @fclose($f);
if($result==1)
{
$obj->update_status($id);
header('location:profileuser.php');
}
?>
