<?php

$username=$_POST['username'];
$password=$_POST['password']; 
 
 include('dbconnect.php');
	$result = mysql_query("SELECT * FROM login WHERE username='$username'AND password='$password' and sts='1'",$con);
	$flag=0;
	$status='0';
	if($result)
	{
		while($row = mysql_fetch_array($result))
		{
	       $status=$row['sts'];
	  	   if($status==1)
	       {
	        $flag=1;
	  	    session_start();
	        $type=$row['type'];
	  	    $_SESSION['user'] = $type;
	  	    $_SESSION['username'] = $username;
	      }
	  
		}
	}
  
    if($flag==1 && $type=="admin")
		echo "<script>location.href='admin/index.php'</script>";
	else if($flag==1 && $type=="student")
		echo "<script>location.href='student/index.php'</script>";
	else if($flag==1 && $type=="transport")
		echo "<script>location.href='transport/index.php'</script>";
  
  else if($status=='0')
	  echo"<script>alert('Your account is not validated');location.href='index.php';</script>";
  
 
 
  else
	  echo"<script>alert('Invalid Username or Password');location.href='index.php';</script>";
	   
 
mysql_close($con);
?>