<script>
//name
                        function lnameValidate(){
                        var lastname = document.getElementById("name").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(lastname.match(pattern)){
                        document.getElementById("lnameValidate").innerHTML="";
                        }
                        else if(!lastname){
                        document.getElementById("lnameValidate").innerHTML="*Name Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("lnameValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }
//	


//
                        function validatepwd(){
                        var log_password  = document.getElementById("log_password").value;
                        var pattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
                        isValid=true;
                        if(log_password.match(pattern)){
                        document.getElementById("validatepwd").innerHTML="";  
                        }
                        else if(!log_password){
                        document.getElementById("validatepwd").innerHTML="*Password Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("validatepwd").innerHTML="*Your password must be at least 8 characters long, contain at least one number and have a mixture of uppercase and lowercase letters.";
                        isValid=false;
                        }
                        return isValid;
                        }				
//

//
                        function validatecontactno(){
                        var contactno = document.getElementById("phn").value;
                        var pattern = /^[7-9][0-9]{1,9}$/;
                        isValid=true;
                        if(contactno.match(pattern)){
                        document.getElementById("phnvalidate").innerHTML="";
                        }
                        else if(!contactno){
                        document.getElementById("phnvalidate").innerHTML="*Phone Number required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("phnvalidate").innerHTML="Invalid Contact Number";
                        isValid=false;
                        }
                        return isValid;

                        }
//						





var letters=/^[a-z A-Z]+$/;
  var numbers=/^\d{10}+$/;
  function check()
  {
	  if(!document.getElementById("phn").value.match(numbers))
	  {
		  alert('Input digits only for phone number');
		  return false;
	  }
	  else
	  {
		  return true;
	  }
  }
</script>