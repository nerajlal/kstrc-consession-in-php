<?php
$con=mysql_connect("localhost","root","");
 mysql_select_db("babysitter",$con);
 
 
 function autoid($tablename,$field)
{
	
	$con=mysql_connect("localhost","root","");
 mysql_select_db("babysitter",$con);
//Auto generate next id in the screen.

//Query to get the highest value in table

$sql="select max($field) as mid from $tablename";

$data=mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($data))
{
 $id=$row['mid'];
}

$id=$id+1;
return $id;

	
}
 
 ?>