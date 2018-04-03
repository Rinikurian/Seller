<?php
include_once 'db.php';
?>
<?php
if (isset($_POST['signup'])) {
    $staff_name =strtoupper( $_POST['staff_name']);
  
    $mob_number =strtoupper( $_POST['mob_number']);
    
  
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password = $_POST['password'];
    $a=sha1($password1);
    $b=sha1($password);
    $address = strtoupper($_POST['address']);

    if ($a == $b) {
       

        
        $sql1="INSERT INTO `staff`(`staffname`, `mobile`, `email`, `Password`, `address`, `roleid`, `status`) VALUES ('$staff_name','$mob_number','$email','$a','$address',2,1)";
        
        $res = mysqli_query($dbcon, $sql1)or die(mysqli_error($dbcon));


        $p = "select max(staffid) as lgid from staff";

        $q = mysqli_query($dbcon, $p) or die(mysqli_error($dbcon));
        $row = mysqli_fetch_array($q);
        $x = $row['lgid'];




        echo '<script> alert("Registration Successful Please Login")</script>';
    } else {

        echo '<script language="javascript">';
        echo 'alert("Your password does not match")';
        echo '</script>';
    }
}
?>





<head>
    <title>Staff Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/rrr.png" type="icon">
</head>

<script> function gName(){
            var staff_name= document.form1.staff_name.value;
                if((staff_name===null)||(staff_name.length<5)){
                    
                    alert("Enter Full Name");
                    document.form1.staff_name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.form1.staff_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.form1.staff_name.focus();
                      
                      return false;
                    }
                if((staff_name.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                    document.form1.staff_name.focus();
                    return false;
                }
        }
         function gEmail(){
            var email=document.form1.email.value;
                var atpos = email.indexOf("@");
                var dotpos = email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>email.length)){
                    
                    document.form1.email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
        }
        function gPhone(){
         
            var ph=/^([7-9]{1})([0-9]{9})$/;
            if(document.form1.mob_number.value.search(ph)==-1)
                 {
                      alert("Enter a Valid Number");
                      document.form1.mob_number.focus();
                      return false;
                }
            
            var mob_number=document.form1.mob_number.value;
                if(isNaN(mob_number)){
                    
                    alert("Phone Number Only Contain Digits");
                    document.form1.mob_number.focus();
                    return false;
                }
                if(mob_number.length !== 10){
                    document.form1.mob_number.focus();
                    alert("Phone Number must be 11 Digits");
                    
                    return false;
                }
        }
            function gPwd(){
            var password= document.form1.password.value;
                var password1=document.form1.password1.value;
                if(password.length < 4 ){
                    document.form1.password.style.border = "1px solid red";
                    document.form1.password.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(password !== password1){
                    document.form1.password1.style.border = "1px solid red";
                    document.form1.password1.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
        }
        function  addUser(){
                var staff_name= document.form1.staff_name.value;
                if((staff_name===null)||(staff_name.length<5)){
                    document.form1.staff_name.style.border = "1px solid red";
                    alert("Enter Full Name");
                    document.form1.staff_name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.form1.staff_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.form1.staff_name.focus();
                      document.form1.staff_name.style.border = "1px solid red";
                      return false;
                    }
                if((staff_name.length>25)){
                    document.form1.staff_name.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                    document.form1.staff_name.focus();
                    return false;
                }
                   var mob_number=document.form1.mob_number.value;
                if(isNaN(mob_number)){
                    document.form1.mob_number.style.border = "1px solid red";
                    alert("Phone Number Only Contain Digits");
                    document.form1.mob_number.focus();
                    return false;
                }
                if(mob_number.length !== 10){
                    document.form1.mob_number.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    document.form1.mob_number.focus();
                    return false;
                }    
                                    
                var email=document.form1.email.value;
                var atpos = email.indexOf("@");
                var dotpos = email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>email.length)){
                    
                    document.form1.email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
                
                
                var password= document.form1.password.value;
                var password1=document.form1.password1.value;
  
                
                if(password.length < 4 ){
                    document.form1.password.style.border = "1px solid red";
                    document.form1.password.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(password !== password1){
                    document.form1.password1.style.border = "1px solid red";
                    document.form1.password1.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
                var fpwd=/^[a-z0-9]{4,25}$/;
                if(document.form.password.value.search(fpwd)==-1)
                 {
                      alert("Lowercase Letters,numbers(0-9) are allowed,Password Should not exceed 25 Characters");
                      document.form1.password.focus();
                      
                      return false;
                }
            }
                
</script>
  <div class="jumbotron">
            <h2>
                <center> Staff Registration</center>
            </h2>
        </div>


<form id="form1"  class="form-horizontal" method="post" action=""  onsubmit="return addUser()" name="form1">
    <fieldset>

        <!-- Form Name -->
     
        <br>
        <br>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Staff Name</label>  
            <div class="col-md-4">
                <input id="staff_name" name="staff_name"  type="text" placeholder="Enter your name" class="form-control input-md" required onChange="return gName()" >

            </div>
        </div>

     

      


        <div class="form-group">
            <label class="col-md-4 control-label" for="name"> Mobile Number</label>  
            <div class="col-md-4">
                <input id="mob_number" name="mob_number" type="tel" placeholder="Enter mobile number" class="form-control input-md" required onChange="return gPhone()">

            </div>
        </div>
       

<div class="form-group">
            <label class="col-md-4 control-label" for="street"> Address</label>  
            <div class="col-md-4">
                <input id="local_address" name="address" type="text" placeholder="Enter your local address" class="form-control input-md" required="">

            </div>
        </div>
        


        <div class="form-group">
            <label class="col-md-4 control-label" for="street">Email</label>  
            <div class="col-md-4">
                <input id="email" name="email" type="email"  placeholder="Enter your email" class="form-control input-md" required onChange="return gEmail()" >

            </div>
        </div>


         



        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required >

            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Confirm Password</label>
            <div class="col-md-4">
                <input id="password1" name="password1" type="password" placeholder="Confirm password" class="form-control input-md" required onChange="return gPwd()">

            </div>
        </div>
        


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="signup"></label>
            <div class="col-md-4">

                <input type="submit" name="signup" value="REGISTER" id="signup" class="btn btn-success">
                <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
                <button class="btn btn-primary" onclick="location.href = 'login.php';" style="float: right;">LOGIN</button>
                  
            </div>
        </div>

    </fieldset>
</form>
