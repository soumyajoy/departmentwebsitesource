
<?php
class dbclass 
{
var $con;
public function dboperation()
{

//$this->con=mysql_connect("localhost","mcaadmin","mcaadmin");
$this->con=mysql_connect("localhost","root","");
//$this->con=mysql_connect("mca.rit.ac.in","soumya","soumya");
mysql_select_db("deptsite1",$this->con);
}
public function execute($sql)
{
$this->dboperation();
return mysql_query($sql,$this->con);
}
}
?>