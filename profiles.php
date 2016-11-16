<?php
session_start(); 
$i=$_SESSION["loginid"];

	include_once("query.php");
	
					$obj=new query();
					 $details=$obj->details($i);
						 $r=mysql_fetch_array($details);
						 $_SESSION["name"]=$r[1];
	 		 
?>			 
                         
<!DOCTYPE html>
<html >
  <head>
  <!--<script>
  function enable()
  	{
		document.getElementById("LOGIN").value = submit;
	}
	function change()
{
    var elem = document.getElementById("LOGIN");
    if (elem.value=="	Edit   	") { 
										elem.value = "Submit"
										document.getElementById("name").disabled = false;
										document.getElementById("date").disabled = false;
										document.getElementById("addrss").disabled = false;
										document.getElementById("ph").disabled = false;
										document.getElementById("php").disabled = false;
										document.getElementById("net").disabled = false;
										document.getElementById("male").disabled = false;
										document.getElementById("female").disabled = false;
										
									}
    else
									{
										document.getElementById('submit').type="submit"									}
}




	
	</script>-->
    <meta charset="UTF-8">
    <title>Home</title>

        <link rel="stylesheet" href="../../../myproject/template/web/css/style.css">

    
    
    
  </head>

<body>

    <div class="register-card">
      <h1></h1>
      <br>
  <form id="edit" name="edit" method="POST" action="changecontent.php" >
  <title></title>

<body>
<table align="center">
<tr>
<td width="52"> </td>
<td width="450">
<table width="450" height="472" align="center" bordercolor="#000000" bgcolor="#CCCCCC">

<tr>
<?php echo "Details of ".$r[1];?>
 <td> <label>NAME</label></td>
 <td>
:<?php echo $r[1];?>

  
  <tr><td><label>DOB</label></td>
    <td></label>
     <?php echo $r[3];?></td>
  </tr>
      <tr><td><label>EDUCATION</label></td>
    <td></label>
     <?php echo $r[4];?></td>
  </tr>
  <tr><td><label>EXPERIENCE</label></td>
    <td></label>
     <?php echo $r[5];?></td>
  </tr>
  <tr><td><label>AREA OF INTEREST</label></td>
    <td></label>
     <?php echo $r[6];?></td>
  </tr>
  <tr><td><label>SPECILAIZED TRAINING</label></td>
    <td></label>
     <?php echo $r[7];?></td>
  </tr>
  <tr><td><label>PAPERS PUBLISHED</label></td>
    <td></label>
     <?php echo $r[8];?></td>
  </tr>
  <tr><td><label>MOBILE NO</label></td>
    <td></label>
     <?php echo $r[9];?></td>
  </tr>
  <tr><td><label>EMAIL</label></td>
    <td></label>
     <?php echo $r[10];?></td>
  </tr>
  <tr><td><img src="<?php echo $r[6];?>"</td>
  </tr>
  <tr><td><a href="changecontent.php">edit profile<br>
  <a href="login.php">logout
  </a>
  