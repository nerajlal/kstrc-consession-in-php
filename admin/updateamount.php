<?php

include('../dbconnect.php');
$id=$_POST['id'];
$amount=$_POST['amount'];
$query="update applypass set amount=$amount,status=1 where passid='$id'";
echo $query;
mysql_query($query);
header('location:approvebuspass.php');


?>