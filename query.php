<?php
include_once("dbconnection.php");
class query
{
function insert_registration($name,$gender,$dob,$desig,$education,$exp,$ar,$tr,$pp,$mob,$mail,$profile,$id)
{
$obj=new dbclass();
echo $sql="insert into registration(name,gender,dob,designation,course_studied,experience,area_of_interest,training,papers_published,mobile_no,e_mail,profile_photo,loginid)values('$name','$gender','$dob','$desig','$education','$exp','$ar','$tr','$pp','$mob','$mail','$profile','$id')";
return $obj->execute($sql);

}

function insert_internalreg($branch,$year,$name,$sem,$sub_1,$sub_2,$sub_3,$sub_4,$sub_5,$sub_6,$sub_7,$sbmark_1,$sbmark_2,$sbmark_3,$sbmark_4,$sbmark_5,$sbmark_6,$sbmark_7)
{
         $obj=new dbclass();
         echo $sql="insert into internal(branch,year,adno,sem,sub_1,sub_2,sub_3,sub_4,sub_5,sub_6,sub_7,sbmark_1,sbmark_2,sbmark_3,sbmark_4,sbmark_5,sbmark_6,sbmark_7)values('$branch','$year','$name','$sem','$sub_1','$sub_2','$sub_3','$sub_4','$sub_5','$sub_6','$sub_7','$sbmark_1','$sbmark_2','$sbmark_3','$sbmark_4','$sbmark_5','$sbmark_6','$sbmark_7')";
return $obj->execute($sql) or die("Error".mysql_error());
} 
function studentsignup($ad_no,$email,$pwd)
{
$obj=new dbclass();
$sql="insert into student_login(ad_no,email,pwd)values('$ad_no','$email','$pwd')";
return $obj->execute($sql) ;
}
function student_login($usr,$pwd){
	$obj=new dbclass();
	$sql="select * from student_login where email='$usr' AND  pwd='$pwd'";
	return $obj->execute($sql);
	}

/*function insert_login($uname,$pswd)
{
$obj=new dbclass();
$sql="insert into login(username,password,role,status)values('$uname','$pswd','staff',1)";
return $obj->execute($sql);
}*/
function profile_insert($id,$profile)
{
$obj=new dbclass();
 $sql="insert into profile(tid,profile)values('$id','$profile')";
return $obj->execute($sql);
}
function login($usr,$pwd)
				{
					$obj=new dbclass();
					$sql="select * from login where username='$usr' AND password='$pwd'";
					return $obj->execute($sql);
	}
function details($id)
				
				{
				$obj=new dbclass();
				$sql="select * from registration where loginid=$id";
				return $obj->execute($sql);
				}
				
function fetchstaff($id)
                {
				$obj=new dbclass();
				echo $sql="select * from profile where tid=$id";
				return $obj->execute($sql);
				}		
function update_status($loginid)
{
$obj=new dbclass();
$sql="update login set status='2' where id='$loginid'";
return $obj->execute($sql);
}
function insert_staff($mid,$pswd,$role)
{
$obj=new dbclass();
$sql="insert into login(username,password,role,status)values('$mid','$pswd','$role',1)";
return $obj->execute($sql);
}

function areaofinterest($id)
				
				{
				$obj=new dbclass();
				$sql="select area_of_interest from registration where loginid=$id";
				return $obj->execute($sql);
				}
function education($id)
				
				{
				$obj=new dbclass();
				$sql="select course_studied from registration where loginid=$id";
				return $obj->execute($sql);
				}
function image(){
				$obj=new dbclass();
				$sql="select registration.profile_photo,registration.name,registration.designation,profile.profile from profile INNER JOIN registration ON profile.tid=registration.loginid 
				INNER JOIN login ON login.id=registration.loginid
				where login.role='staff'
				";
				return $obj->execute($sql);
}
function image1(){
				$obj=new dbclass();
				$sql="select registration.profile_photo,registration.name,registration.designation,profile.profile from profile INNER JOIN registration ON profile.tid=registration.loginid 
				INNER JOIN login ON login.id=registration.loginid
				where login.role='techstaff'";
				return $obj->execute($sql);
}

/*function gallery($ph, $carricular)
{
$obj=new dbclass();
$sql="insert into gallery(name,category)values('$ph','$carricular')";
return $obj->execute($sql);		
}

function gallery($ph, $sports)
{
$obj=new dbclass();
$sql="insert into gallery(name,category)values('$ph','$sports')";
return $obj->execute($sql);	
}

function gallery($ph,$ritu)
{
$obj=new dbclass();
$sql="insert into gallery(name,category)values('$ph','$ritu')";
return $obj->execute($sql);	
}*/

function gallery($ph,$cate)
{
$obj=new dbclass();
$sql="insert into gallery(name,category)values('$ph','$cate')";
echo $sql;
return $obj->execute($sql)  or die("Error.".mysql_error()) ;		
}
function getgallery($cate)
{
$obj=new dbclass();
$sql="select * from gallery where category='$cate'";
return $obj->execute($sql);		
}


function insert_project($sname,$pname,$description,$date)
{
		$obj=new dbclass();
		echo $sql="insert into project(sname,pname,description,year)values('$sname','$pname','$description','$date')";
		return $obj->execute($sql);
}

function insert_attendencereg($branch,$year,$adm_no,$sem,$month1,$month2,$month3,$month4,$total)
{
		$obj=new dbclass();
		echo $sql="insert into attendence(branch,year,adm_no,sem,month1,month2,month3,month4)values('$branch','$year',$adm_no,'$sem','$month1','$month2','$month3','$month4')";
		return $obj->execute($sql) or die("Error.".mysql_error());
}


/*function insert_studentreg($sname,$gender,$dob,$gname,$rollno,$address,$email,$phno)
{
		$obj=new dbclass();
		echo $sql="insert into studentreg(sname,gender,dob,gname,rollno,address,email,phno)values('$sname','$gender','$dob','$gname','$rollno','$address','$email','$phno')";
		return $obj->execute($sql);
}*/

	function load_project()
{
		$obj=new dbclass();
		$sql="select * from project";
		return $obj->execute($sql);
}

	function load_internals()
{
		$obj=new dbclass();
		$sql="select * from internals";
		return $obj->execute($sql);
}

	function load_attendence($adm_no)
{
		$obj=new dbclass();
		$sql="select * from attendence where adm_no=".$adm_no;
		return $obj->execute($sql);
}
	function get_subname($sub_id)
{
		$obj=new dbclass();
		$sql="select sub_name from subjects where sid=".$sub_id;
		$res=$obj->execute($sql);
		$subjname="";
		if(!empty($res)){
			$row=mysql_fetch_assoc($res);
			$subjname=$row['sub_name'];
		}
		return $subjname;
}

	function load_internal($adm_no)
{
		$obj=new dbclass();
		$sql="select * from internal  where adno=".$adm_no;
		return $obj->execute($sql);
}

function change_pwd($username,$password,$newpassword,$confirmnewpassword)
{
	$obj=new dbclass();
	$sql = "SELECT pwd FROM student_login WHERE 
email='$username'";
    return $obj->execute($sql);
}

function insert_message($sem,$title,$details,$date)
 {
   $obj=new dbclass();
   $sql="insert into message(msg_for,msg_title,msg_details,msg_date)values('$sem','$title','$details','$date')";
   return $obj->execute($sql) or die("Error.".mysql_error());
}

function load_message($sem)
{
$obj=new dbclass();
$sql="select * from message where msg_for='$sem'  order by msg_date desc";
return $obj->execute($sql);	
}
function load_subjects($sem)
{
  $obj=new dbclass();
  $sql="select * from subjects where sub_sem='$sem'";
  return $obj->execute($sql);	
}



function view_details()
 {
	 $obj=new dbclass();
	 $sql="select * from registration ";
	 return $obj->execute($sql);

 }
 
 function delete_details($id2)
 {
	 $obj=new dbclass();
	 $sql="delete  from registration  where id=$id2";
	 return $obj->execute($sql);
 }
 
 function view_category()
 {
	 $obj=new dbclass();
	 $sql="select * from category ";
	 return $obj->execute($sql); 
 }
 
 function add_category($cat)
 {
	 $obj=new dbclass();
	 $sql="insert into category (category) values ('$cat')";
	 return $obj->execute($sql); 
 }
 function check_category_exist($cat)
 {
	 $obj=new dbclass();
	 $sql="select * from category where category='$cat'";
	 return $obj->execute($sql); 
 }
 
 
 function delete_category($delcat)
 {
	 $obj=new dbclass();
	 $sql="delete from category  where category='$delcat'";
	 return $obj->execute($sql);
	 
 }
 
 
/*function get_semester($admission_no)
{
$obj=new dbclass();
$sql="select cur_sem from pg_stud where adm_no='$admission_no'";
return $obj->execute($sql);	
}*/
}
?>