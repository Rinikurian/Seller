<?php
include_once 'db.php';
//session_start();
?>


<?php
if (isset($_POST['signup'])) {
    $staff_name = $_POST['staff_name'];
  
    $mob_number = $_POST['mob_number'];
    
  
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    if ($password1 == $password) {
        $sql = "INSERT INTO `staff`(`staff_name`,  `mob_number`, `email`, `password`,`address`, `status`) VALUES ('$staff_name','$mob_number','$email','$password1''$address',1)";

        
        $sql1="INSERT INTO `staff`(`staffname`, `mobile`, `email`, `Password`, `address`, `status`) VALUES ('$staff_name','$mob_number','$email','$password1','$address',1)";
        
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



<style>
.navbar-default {
    
    color:white;
    
   
}

.jumbotron{
    background-color:#1E90FF;
    color:white;
  padding:100px 0 2px 0;
  margin-left:7px;
}
</style>


<head>
    <title>Staff Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/rrr.png" type="icon">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<script src="js/validation.js"></script>
<!--  <div class="jumbotron">
            <h2>
                <center> Staff Registration</center>
            </h2>
        </div>-->


<form name="form1" class="form-horizontal" method="post" action="" onsubmit="return ValidationEvent()">
    <fieldset>
<div class="jumbotron" style="margin:0px">
<!--<img src="http://bit.ly/16hPjeS" class="img-responsive img-rounded" alt="Reponsive image">-->    
  <h3>Cupcake Ipsum!</h3>
 
</div>
<div class="w3-bar w3-green">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>
        <!-- Form Name -->
     
        <br>
        <br>
         <br>
        <br>
        

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Staff Name</label>  
            <div class="col-md-4">
                <input id="staff_name" name="staff_name" onblur="fname()" type="text" placeholder="Enter your name" class="form-control input-md" required="">

            </div>
        </div>

     

      


        <div class="form-group">
            <label class="col-md-4 control-label" for="name"> Mobile Number</label>  
            <div class="col-md-4">
                <input id="mob_number" name="mob_number" onblur="phone()" type="varchar" placeholder="Enter mobile number" class="form-control input-md" required="">

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
                <input id="email" name="email" type="email" onblur="checkEmail()" placeholder="Enter your email" class="form-control input-md" required="">

            </div>
        </div>


         



        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">

            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="password">ConfirmPassword</label>
            <div class="col-md-4">
                <input id="password1" name="password1" type="password" placeholder="Confirm password" class="form-control input-md" required="">

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
