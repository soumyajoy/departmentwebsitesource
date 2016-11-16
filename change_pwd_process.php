 <?php
session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
include_once("query.php");
$obj=new query();
$result=$obj->change_pwd($username,$password,$newpassword,$confirmnewpassword);

 
        
        if(!$result)
        {
			header('location:change_pwd.php');
      // echo "The username you entered does not exist";
	   $_SESSION['msg']="The username you entered does not exist";
        }
        if($password!= mysql_result($result, 0))
        {
       // echo "You entered an incorrect password";
		$_SESSION['msg']="You entered an incorrect password";
        }
        if($newpassword==$confirmnewpassword)
        $sql=mysql_query("UPDATE student_login SET pwd='$newpassword' where 

 email='$username'");
        if($sql)
        {
			header('location:change_pwd.php');
        //echo "Congratulations You have successfully changed your password";
		$_SESSION['msg']="<span style='color:#FFFFFF'> Congratulations You have successfully changed your password</span>";
        
		}
       else
        {
			header('location:change_pwd.php');
      // echo "Passwords do not match";
	  $_SESSION['msg']="Password do not match";
       }
      ?>