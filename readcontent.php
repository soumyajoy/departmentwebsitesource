<?php
session_start();
include_once("query.php");
?>

<form action="readcontent.php" method="post">
  <textarea rows="130" cols="130" name="a">"<?php
       $f = fopen('profiles.php',"r");
        $content = fread($f, filesize('profiles.php'));
        echo $content;
        @fclose($f);

?>
  </textarea >
  <input type="submit" />
</form>
<?php
if(isset($_POST["a"]))
{
 file_put_contents('profiles.php', $_POST['a']);
 header("location:profiles.php");
 }
 ?>