<?php
include_once("dbconnection2.php");
class query2
{
function execute_query($sql)
{
	$obj2=new dbclass_college ();
	return $obj2->execute($sql);
}

function select_all_student($branch_name,$yr)
{
     $sql="select * from pg_stud where branch='$branch_name' and yr_adm='$yr'";  
	 return $this->execute_query($sql);
} 
	function select_all_year()
	{
     	$sql="select distinct(yr_adm) from pg_stud";  
	 	return $this->execute_query($sql);
	} 
	function select_all_banch()
	{
     	$sql="select distinct(branch) from pg_stud";  
	 	return $this->execute_query($sql);
	}
	
	function get_semester($admission_no)
	{
		$obj=new dbclass();
		$sql="select cur_sem from pg_stud where adm_no='$admission_no'";
		return $this->execute_query($sql);
		
	}
	function load_students_ofyear($ad_year,$branchid)
	{
	  
	  $sql="select adm_no,name from pg_stud where yr_adm='$ad_year' and branch='$branchid'";
	  return $this->execute_query($sql);	
	}
 
}
?>