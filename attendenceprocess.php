<?php
session_start();
$branch=$_POST['branch'];
$year=$_POST['year'];
$adm_no=$_POST['name'];
$sem=$_POST['sem'];
$month1=$_POST['month1'];
$month1_per=$_POST['month1_per'];
$month2=$_POST['month2'];
$month2_per=$_POST['month2_per'];
$month3=$_POST['month3'];
$month3_per=$_POST['month3_per'];
$month4=$_POST['month4'];
$month4_per=$_POST['month4_per'];
$total=($month1_per+$month2_per+$month3_per+$month4_per)/4*100;
$month1=$month1."|".$month1_per;
$month2=$month2."|".$month2_per;
$month3=$month3."|".$month3_per;
$month4=$month4."|".$month4_per;


include_once("query.php");
$obj=new query();
$result= $obj->insert_attendencereg($branch,$year,$adm_no,$sem,$month1,$month2,$month3,$month4);
if($result)
{
	$msg=urldecode('Attedence Saved !');
}
header('location:attendencereg.php?msg='.$msg);
?>
