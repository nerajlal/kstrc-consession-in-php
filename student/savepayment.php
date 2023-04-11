<?php
  session_start();
  //authorization
  if(!isset($_SESSION['username'])||$_SESSION['user']!='student')
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='../index.php';</script>";
  }
?>

<?php

              include '../dbconnect.php';
             
			  $qr="update applypass set status=2,amount=0 where studid='$_SESSION[username]'";
			  echo $qr;
			  
			  
              $result = mysql_query($qr);
			  echo"<script>alert('Payment Saved');</script>";
			  echo"<script>location.href='index.php';</script>";
			  
			  
			  
?>
