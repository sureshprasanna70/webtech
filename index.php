<?php
mysql_connect("localhost","root","") or die("not connected");
mysql_select_db("ruby");
echo "<BR>"."Select"."<br>";
$result= mysql_query("select * from contact");
$row = mysql_fetch_row($result);
if($row)
{
	echo "Selected successful";
foreach($row as $ans)
{
	echo $ans;
}
}
else
{
	echo "Not selected";
}
echo "<BR>"."Update"."<br>";
if(mysql_query('UPDATE contact SET number = 78768398595 WHERE id =1 AND name="Doss" '))
{
	echo "Updated successfully";
}
else
{
	echo "Not updated";
}
echo "<br>"."Insertion"."<br>";
if(mysql_query('INSERT into contact (id,name,number) values(8,"Monish",4846884484)'))
{
	echo "Inserion successful";
}
else
{
	echo "Insertion not successful";
}