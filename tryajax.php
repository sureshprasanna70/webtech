<?php
include_once('dbconn.php');
$name=$_POST['name'];
$result=mysql_query("SELECT * from contact where name='".$name."'");
$single=mysql_fetch_array($result);
$tosend=array('id'=>$single[0],'name'=>$single['name'],'number'=>$single['number']);
echo json_encode($tosend);
?>