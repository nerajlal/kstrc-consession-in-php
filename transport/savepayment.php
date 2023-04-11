<?php
  session_start();
  //authorization
  if(!isset($_SESSION['username'])||$_SESSION['user']!='user')
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='../index.php';</script>";
  }
?>

<?php

              include '../dbconnect.php';
              $p=1;
			  $subject=$_POST['subject'];
			  $message=$_POST['message'];
			  $email=$_SESSION['username']; 
			  $qr="insert into tbl_feedback values(NULL,'$email','$subject',' $message')";
			  //echo $qr;
			  
			  
              $result = mysql_query("insert into tbl_feedback values(NULL,'$email','$subject',' $message')");
			  echo"<script>alert('Feedback Saved');</script>";
			  echo"<script>location.href='index.php';</script>";
			  
			  
			  
?>
