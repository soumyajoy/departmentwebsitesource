<?php
$sem=$_GET["id"];
header("Content-disposition: attachment;filename=$sem");
header("Content-type: application/pdf");
readfile("pdf/".$sem);
?>