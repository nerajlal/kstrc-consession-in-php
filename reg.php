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
<script>
    function Validateemail() {
      var email = document.getElementById("email").value;
      var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
      if (email.length < 3 || email.length > 40) {
        document.getElementById("email1").innerHTML = "Invalid Email";
        document.getElementById("email").value = email;
        document.getElementById("email").style.color = "red";
        return false;
      }
      if (email!="" && !email.match(/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/)) {
        document.getElementById("email1").innerHTML =
          "Please enter a valid email";
        document.getElementById("email").value = email;
        document.getElementById("email").style.color = "red";
        return false;
      } else {
        document.getElementById("email1").innerHTML = " ";
        document.getElementById("email").style.color = "green";
        // return true;
      }
    }
    //phone

    function Validphone() {
      var val = document.getElementById("phone").value;
      if (val!="" && !val.match(/^[789][0-9]{9}$/)) {
        document.getElementById("msg2").innerHTML =
          "Only Numbers are allowed and must contain 10 number";
        document.getElementById("phone").value = val;
        return false;
      } else {
        document.getElementById("msg2").innerHTML = "";
        //   return true;
      }
    }
    //password

    function Password() {
      var pass = document.getElementById("password").value;
      //var patt= /^(?=.[0-9])(?=.[!@#$%^&])[A-Za-z0-9!@#$%^&]{7,15}$/;
      //var patt = /^[a-zA-Z0-9@#$%^&]{7,15}$/;
      var patt = /^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{7,15}$/;

      if (pass!="" && !pass.match(patt)) {
        console.log(pass);
        document.getElementById("pass").innerHTML =
          "Password must be 7 to 15 character with number and special character ";
        document.getElementById("password").value = pass;
        document.getElementById("password").style.color = "red";
        return false;
      } else {
        console.log(pass, "Green");
        document.getElementById("pass").innerHTML = " ";
        document.getElementById("password").style.color = "green";
        //return true;
      }
    }
    function cpassword() {
      var pass = document.getElementById("password").value;
      var cpass = document.getElementById("cpass").value;
      if (cpass != "" && pass != cpass) {
        document.getElementById("passmsg").style.display = "block";
        document.getElementById("passmsg").innerHTML = "Password doesnot match";
        return false;
      } else {
        document.getElementById("passmsg").style.display = "none";
      }
    }
    function Validphone()
                        {
                        var ph = document.getElementById("phno").value;
                        var expr = /^[6-9]\d{9}$/;
                        if(ph!="" && expr.test(ph)==false){
                            document.getElementById('msg2').style.display = "block";
                            document.getElementById('msg2').innerHTML = "Invalid Phone number";
                            return false;
                        }
                        else{
                            document.getElementById('msg2').style.display = "none";
                        }
                    }

    function Val() {
        
        var nameexpr = /^[a-zA-Z\-]+$/;
        var nm = document.getElementById("name").value;
        if(nm!="" && nameexpr.test(nm)==false){
            document.getElementById('namemsg').style.display = "block";
            document.getElementById('namemsg').innerHTML = "Invalid Name";
            return false;
        }
        else{
            document.getElementById('namemsg').style.display = "none";
        }

                        var ph = document.getElementById("ano").value;
                        var expr = /^[6-9]\d{9}$/;
                        if(ph!="" && expr.test(ph)==false){
                            document.getElementById('anomsg').style.display = "block";
                            document.getElementById('anomsg').innerHTML = "Invalid Phone number";
                            return false;
                        }
                        else{
                            document.getElementById('anomsg').style.display = "none";
                        }
                        var nameexpr = /^[a-zA-Z\-]+$/;
        var nm = document.getElementById("cname").value;
        if(nm!="" && nameexpr.test(nm)==false){
            document.getElementById('childmsg').style.display = "block";
            document.getElementById('childmsg').innerHTML = "Invalid child Name";
            return false;
        }
        else{
            document.getElementById('childmsg').style.display = "none";
        }

        var nameexpr = /^[a-zA-Z\-]+$/;
        var nm = document.getElementById("hname").value;
        if(nm!="" && nameexpr.test(nm)==false){
            document.getElementById('hmsg').style.display = "block";
            document.getElementById('hmsg').innerHTML = "Invalid HouseName";
            return false;
        }
        else{
            document.getElementById('hmsg').style.display = "none";
        }

        var nameexpr = /^[a-zA-Z\-]+$/;
        var nm = document.getElementById("sname").value;
        if(nm!="" && nameexpr.test(nm)==false){
            document.getElementById('smsg').style.display = "block";
            document.getElementById('smsg').innerHTML = "Invalid Street Name";
            return false;
        }
        else{
            document.getElementById('smsg').style.display = "none";
        }

        var nameexpr = /[0-9]{6}/;
        var nm = document.getElementById("zipcode").value;
        if(nm!="" && nameexpr.test(nm)==false){
            document.getElementById('pinmsg').style.display = "block";
            document.getElementById('pinmsg').innerHTML = "Invalid pincode";
            return false;
        }
        else{
            document.getElementById('pinmsg').style.display = "none";
        }

        var nameexpr = /^[a-zA-Z\-]+$/;
    var nm = document.getElementById("city").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('citymsg').style.display = "block";
        document.getElementById('citymsg').innerHTML = "Invalid City";
        return false;
    }
    else{
        document.getElementById('citymsg').style.display = "none";
    }

    var nameexpr = /^[a-zA-Z\-]+$/;
    var nm = document.getElementById("state").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('statemsg').style.display = "block";
        document.getElementById('statemsg').innerHTML = "Invalid State";
        return false;
    }
    else{
        document.getElementById('statemsg').style.display = "none";
    }

    var nameexpr = /^[a-zA-Z\-]+$/;
    var nm = document.getElementById("country").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('cntrymsg').style.display = "block";
        document.getElementById('cntrymsg').innerHTML = "Invalid Country";
        return false;
    }
    else{
        document.getElementById('cntrymsg').style.display = "none";
    }

    var pass = document.getElementById("password").value;
    var cpass = document.getElementById("cpass").value;
    if(cpass!=""&&pass!=cpass){
        document.getElementById('passmsg').style.display = "block";
        document.getElementById('passmsg').innerHTML = "Password doesnt match";
        return false;
    }
    else{
        document.getElementById('passmsg').style.display = "none";
    }
      if (
        Validstr1() === false ||
        Validstr2() === false ||
        Validstr() === false ||
        ValidateEmail() === false ||
        Password() === false ||
        cpassword() === false ||
        Validphone() === false
      ) {
        return false;
      }
      
    }
  </script>

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
                <h1 class="display-2 text-white animated slideInDown mb-4">Baby Registration</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Baby Registration</li>
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
                                
                               	<form action="" method="POST" onsubmit="return Val();" >
                                    <div class="row g-3">
									    <div class="col-sm-12">
                                            <div class="form-floating">
                                               <h4>Primary Details</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required onblur="return Val()" onkeyup="return Val()">
                                                <label for="name">Your Name</label>
                                                <span id="namemsg" style="color: red;"></span>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="phno" name="phno" placeholder="Mobile Number" 
												pattern='[0-9]{10}' title="10 digits only." onkeyup="return Validphone();" required>
                                                <label for="name">Mobile Number</label>
                                                <span id="msg2" style="color: red"></span>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="ano" name="ano" placeholder="Alterate Number" 
												pattern='[0-9]{10}' title="10 digits only." onkeyup="return Val();" required>
                                                <label for="name">Alterate Mobile Number</label>
                                            </div>
                                                <span id="anomsg" style="color: red"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" name="mailid" placeholder="Your Email"  onkeyup="return Validateemail();" required>
                                                <label for="email">Your Email</label>
                                                <span id="email1" style="color: red"></span>
                                            </div>
                                        </div>
										<div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cname" name="cname" placeholder="Child Name" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required onkeyup="return Val();">
                                                <label for="subject">Child Name</label>
                                                <span id="childmsg" style="color: red"></span> 
                                            </div>
                                                <span id="childmsg" style="color: red"></span> 
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="date" class="form-control border-0" id="dob" name="dob" required>
                                                <label for="subject">Date of birth</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
												<select class="form-control border-0" id="gender" name="gender">
												<option></option>
												<option value="male">Male</option>
												<option value="female">Female</option>
												</select>
                                                <label for="subject">Child Gender</label>
                                            </div>
                                        </div>
										
                                       <div class="col-sm-12">
                                            <div class="form-floating">
                                               <h4>Address Details</h4>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="hname" name="hname" placeholder="House Name" 
												 title="Minimum 3 & maximum 30 characters. Letters only permitted." required onkeyup="return Val();">
                                                <label for="subject">House Name</label>
                                            </div>
                                            <span id="hmsg" style="color: red;"></span>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="sname" name="sname" placeholder="Street Name" 
												title="Minimum 3 & maximum 30 characters. Letters only permitted." required onkeyup="return Val();">
                                                <label for="subject">Street Name</label>
                                            </div>
                                            <span id="smsg" style="color: red;"></span>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="zipcode" name="zipcode" placeholder="Zipcode" 
											 title="Minimum 3 & maximum 30 characters. Letters only permitted." required onkeyup="return Val();">
                                                <label for="subject">Zipcode</label>
                                            </div>
                                            <span id="pinmsg" style="color: red;"></span>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="city" name="city" placeholder="City" 
										 title="Minimum 3 & maximum 30 characters. Letters only permitted." required onkeyup="return Val();">
                                                <label for="subject">City</label>
                                            </div>
                                            <span id="citymsg" style="color: red;"></span>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="state" name="state" placeholder="State" 
											 title="Minimum 3 & maximum 30 characters. Letters only permitted." required onkeyup="return Val();">
                                                <label for="subject">State</label>
                                            </div>
                                            <span id="statemsg" style="color: red;"></span>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="country" name="country" placeholder="Country" 
												title="Minimum 3 & maximum 30 characters. Letters only permitted." required onkeyup="return Val();">
                                                <label for="subject">Country</label>
                                            </div>
                                            <span id="cntrymsg" style="color: red;"></span>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-0" id="password" name="password" placeholder="Password" 
												
												title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onkeyup="return Password();" required>
                                                <label for="subject">Password</label>
                                                <span id="pass" style="color: red"></span>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-0" id="cpass" name="cpassword" placeholder="Confirm Password" 
												 
												title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onblur="return Val()" onkeyup="return Val()" required>
                                                <label for="subject">Confirm Password</label>
                                            </div>
                                                <span id="passmsg" style="color: red"></span>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" name="reg" type="submit">Register</button>
                                        </div>
                                    </div>
                                </form>
								<?php
   include 'dbconnect.php';
   
if(isset($_POST['reg']))
{
	$id=autoid("tbl_registration","baby_id");
	$lid=autoid("tbl_login","login_id");
	
    $flag=0;
	//$id,$name,$phno,$ano,$mailid,$cname,$dob,$gender,$hname,$sname,$zipcode,$city,$state,$country,$password,$cpassword
    
	
    $name=$_POST['name'];
    $phno=$_POST['phno'];
    $ano=$_POST['ano'];
	$mailid=$_POST['mailid'];
    $cname=$_POST['cname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
	$hname=$_POST['hname'];
	$sname=$_POST['sname'];
	$zipcode=$_POST['zipcode'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$password=$_POST['password'];
	$cpass=$_POST['cpass'];
	
	$date=date("y-m-d");
	
	$date1=new DateTime($dob);
    $date2=new DateTime($date);
	$interval = $date1->diff($date2);

    $myage= $interval->y; 
	
	if ($myage <= 8)
	{ 
      $flag=0;
	} 
    else
	{ 
     $flag=2;
	}
	    
		
		if($flag==2)
        {
            echo"<script>alert('Enter valid DOB');</script>";
        }
	
	
    if($password!=$cpassword)
    {
        $flag=1;
    }
	
    if($flag==0)
    {
        
        
        $data="SELECT * FROM tbl_registration natural join tbl_login";
        $c=0;
        $sd="SELECT * FROM tbl_registration";
        $p=mysql_query($sd,$con);
        while($row=mysql_fetch_array($p))
        {
            $c++;
        }
        $c++;
        $sq=mysql_query($data,$con);
        while($row=mysql_fetch_array($sq))
        {
            if($row['g_mailid']==$mailid||$row['g_phno']==$phno)
            {
                $flag=1;
            }
        }
        if($flag==1)
        {
            echo"<script>alert('This  account already exits');</script>";
        }
        else if($flag==0)
        {
            $sql="INSERT INTO `tbl_registration`VALUES ('$id','$name','$phno','$ano','$mailid','$cname','$dob','$gender','$hname','$sname','$zipcode','$city','$state','$country')";
            if(mysql_query($sql,$con))
            {
                $sql1="INSERT INTO `tbl_login`VALUES ('$lid','$mailid','$password','user',0)";
                if(mysql_query($sql1,$con))
                {
                    echo"<script>alert('Account created ! Please login ');</script>";
                    
                }
            }
        }
    }
    else
    {
     echo"<script>alert('Password doesn't match);</script>";   
    }
}
            ?>
                            </div>
                        </div>
                        
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