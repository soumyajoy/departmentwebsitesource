<?php
session_start();
//include_once("query.php");
?>
<html>
<head>
<script>
function showcontent() {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("showcontent").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "changecontentajax.php", true);
        xmlhttp.send();
}
</script>
</head>
<body onLoad="showcontent()">

<form action="changecontent.php" method="post">
  <textarea rows="130" cols="100" name="a" id="showcontent">
  </textarea >
  <input type="submit" />
</form>
<?php
if(isset($_POST["a"]))
{
if($_POST["a"]=="")
{
 $f = fopen('profiledummy.php',"r");
        $content = fread($f, filesize('profiledummy.php'));
        @fclose($f);
file_put_contents('profile/profile'.$_SESSION["loginid"].$_SESSION["username"].'.php',$content);
}else
{
file_put_contents('profile/profile'.$_SESSION["loginid"].$_SESSION["username"].'.php', $_POST['a']);
 }
 header('location:profileuser.php');

 }
 ?>
 </body>
 </html>