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
                <h1 class="display-2 text-white animated slideInDown mb-4">Student Registration</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Registration</li>
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
                        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row g-3">
									    <div class="col-sm-12">
                                            <div class="form-floating">
                                               <h4>Student Details</h4>
                                            </div>
                                        </div>
                                       <!-- <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="studid" name="studid" placeholder="Your Name" 
												pattern='[0-9a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="name">Your ID</label>
                                            </div>
                                        </div>-->
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email" 
												 required>
                                                <label for="name">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="address" name="address" placeholder="Your Name" 
												pattern='[a-zA-Z\s]{3,25}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="name">Address</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="phone" name="phno" placeholder="Mobile Number" 
												pattern='[0-9]{10}' title="10 digits only." required>
                                                <label for="name">Mobile Number</label>
                                            </div>
                                        </div>
										
                                        
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="file" class="form-control border-0" id="idproof" name="fileToUpload" required>
                                                <label for="subject">Id Proof(aadhar,Id Card,Driving License,etc.)</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-0" id="password" name="password" placeholder="Password" 
												pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
												title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
                                                <label for="subject">Password</label>
                                            </div>
                                        </div>
										
                                        </div><br>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        echo
   <?php
   include 'dbconnect.php';
   
   if(isset($_POST['submit']))
{
	// $id=autoid("tbl_registration","baby_id");
	// $lid=autoid("tbl_login","login_id");
	
    $flag=0;
	//$id,$name,$phno,$ano,$mailid,$cname,$dob,$gender,$hname,$sname,$zipcode,$city,$state,$country,$password,$cpassword
    
	
    $studid=$_POST['studid'];
    $sname=$_POST['name'];
    $address=$_POST['address'];
	
    $phone=$_POST['phno'];
    $password=$_POST['password'];
    
       
    
    if($flag==0)
           {
               $sql="INSERT INTO studreg VALUES ('null','$sname','$_POST[email]','$address','$phone','$password','0')";
            echo $sql;
            mysql_query($sql);
			$sql="INSERT INTO login VALUES ('null','$_POST[email]','$password','student','1')";
            echo $sql;
            mysql_query($sql);
			
			$sql="select * from login where username='$_POST[email]'";
			$data=mysql_query($sql);
			$id='';
			while($row=mysql_fetch_array($data))
			{
			$id=$row['login_id'];
			}
			
			$target_dir = "idproofs/";
			$target_file=$target_dir ."$id.jpg";
			echo $target_file;
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) or die('Error'.mysql_error());
			header('location:index.php');
			

               //    if(mysql_query($sql,$con))
            //    {
            //        $sql1="INSERT INTO `tbl_login`VALUES ('$lid','$mailid','$password','user',0)";
            //        if(mysql_query($sql1,$con))
            //        {
            //            echo"<script>alert('Account created ! Please login ');</script>";
                       
            //        }
            //    }
           }
       
       else
       {
        echo"<script>alert('Password doesn't match);</script>";   
       }
}   
               ?>

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