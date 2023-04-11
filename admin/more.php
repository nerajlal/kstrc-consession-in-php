<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kider</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
#approve {
  background-color: blue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
#reject {
  
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
#c {
  
  background-color: black;

}
</style>
<style>
.card {

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  float:left
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php
		include'head.php';
		?>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Baby Sitter Details</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="sreg.php">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        
            <h1>Full Details</h1>
<?php

              include '../dbconnect.php';
              $p=1;
			  $uname=$_GET['id'];
			  //$uname=$_SESSION['username']; 
              $result = mysql_query("SELECT * FROM table_sitterreg where mailid='$uname'");

              while($row = mysql_fetch_array($result))
              {
?>
<table id="customers">
	<tr><td>
			<div class="card">
			  <img src="../<?php echo $row['profile_pic'];?>" alt="Avatar" style="width:100%"> 
				<!--<p>Architect & Engineer</p> -->
				
			  </div>
			</div>
	
	</td><td></td></tr>	
	<tr><td>Name :</td><td><?php echo $row['name'];?></td></tr>
	<tr><td>Phno :</td><td><?php echo $row['phno'];?></td></tr>
	<tr><td>Alternate Phno :</td><td><?php echo $row['aphno'];?></td></tr>
	<tr><td>Mailid :</td><td><?php echo $row['mailid'];?></td></tr>
	<tr><td>DOB :</td><td><?php echo $row['dob'];?></td></tr>
	<tr><td>Gender :</td><td><?php echo $row['gender'];?></td></tr>
	<tr><td>Experience :</td><td><?php echo $row['experience'];?></td></tr>
	<tr><td>Category :</td><td><?php echo $row['category'];?></td></tr>
	<tr><td>House Name :</td><td><?php echo $row['house_name'];?></td></tr>
	<tr><td>Student Name :</td><td><?php echo $row['street_name'];?></td></tr>
	<tr><td>Zipcode :</td><td><?php echo $row['zipcode'];?></td></tr>
	<tr><td>City :</td><td><?php echo $row['city'];?></td></tr>
	<tr><td>State :</td><td><?php echo $row['state'];?></td></tr>
	<tr><td>Country :</td><td><?php echo $row['country'];?></td></tr>


</table>
<?php
			  }
?>        
               </div>
              </div>			   
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            
            <?php
			include'footer.php';
			?>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>