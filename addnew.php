<?php
include_once('dbconn.php');
$name=$_POST['name'];
$number=$_POST['number'];
if($name!=NULL || $number !=NULL)
{
if(mysql_query("INSERT into contact(name,number)values('".$name."','".$number."')"))
	$resp=array("status"=>1);
}
else
	$resp=array("status"=>0);

echo json_encode($resp);
?>