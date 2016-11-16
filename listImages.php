<?php
    $conn = mysql_connect("localhost", "mcaadmin", "mcaadmin");
	//$conn = mysql_connect("localhost", "", "");
    mysql_select_db("myproject");
    //$sql = "SELECT * FROM image"; 
	$sql = "SELECT * FROM gallery"; 
    $result = mysql_query($sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<?php
	while($row =mysql_fetch_array($result)) {
	?>
		<img src="imageView.php?image_id=<?php echo $row["id"]; ?>" /><br/><br/><br/><br/><br/>
	
<?php		
	}
    mysql_close($conn);
?>
</BODY>
</HTML>