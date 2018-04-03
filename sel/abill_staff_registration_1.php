<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style2.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    </head>
    <body>
<?php
 include("db.php");
 ?>


        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <BR>
                   
                    <h3>Tech Solutions</h3>
                    <BR>
<!--                    <h3>Bootstrap Sidebar</h3>-->
                </div>

                <ul class="list-unstyled components">
                    
                    
<!--                    <p>Dummy Heading</p>-->
                    <li class="active">
                        <a href="astaff_home.php">HOME</a>
<!--                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>-->
<!--                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>-->
                    </li>
                    <li>
                        
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">ADD</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Staff</a></li>
                            <li><a href="acustomer_reg.php">Customer</a></li>
                            <li><a href="acat_reg.php">Category</a></li>
                            <li><a href="asubcat_reg.php">SubCategory</a></li>
                            <li><a href="asupplier_reg.php">Supplier</a></li>
                            <li><a href="aproduct_reg.php">Product</a></li>
                        </ul>
                    </li>
                     <li>
                        
                        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">View</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu1">
                            <li><a href="astaff_view.php">Staff</a></li>
                            <li><a href="acustomer_view.php">Customer</a></li>
                            <li><a href="acategory_view.php">Category</a></li>
                            <li><a href="asubcategory_view.php">SubCategory</a></li>
                            <li><a href="asupplier_view.php">Supplier</a></li>
                            <li><a href="aproduct_view.php">Product</a></li>
                    </ul></li>
                     <li>
                        
                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">Modify</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu2">
                            <li><a href="astaffshow.php">Staff</a></li>
                            <li><a href="acustomershow.php">Customer</a></li>
                            <li><a href="acatshow.php">Category</a></li>
                            <!--<li><a href="asub">SubCategory</a></li>-->
                            <li><a href="asuppliershow.php">Supplier</a></li>
                            <li><a href="aproductshow.php">Product</a></li>
                        </ul>
                    </li>
                     <li>
                       
                        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">Payment</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu3">
                            <li><a href="abillinvoice.php">Bill</a></li>
                            <li><a href="onlinepay.php">Pay</a></li>
                            <!--<li><a href="#">Page 3</a></li>-->
                        </ul>
                    </li>
                     <li>
                       
                        <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false">Report</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu4">
                           <li><a href="#">Search By Date</a></li>
                           <li><a href="aproduct_view.php.php">Search By Stock</a></li>
                            <!--<li><a href="#">Page 3</a></li>-->
                        </ul>
                    </li>
                    
                  
                </ul>

              <ul class="list-unstyled CTAs">
                  <li><a href="start.php"class="download">Logout</a></li>
<!--                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>-->
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                           
                               
                                <h3>TECH SOLUTIONS</h3>
                               
                            </ul>
                        </div>
                    </div>
                </nav>


<?php
if (isset($_POST['signup'])) {
    $staff_name = strtoupper($_POST['staff_name']);
  
    $mob_number = strtoupper($_POST['mob_number']);
    
  
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password = $_POST['password'];
    $address = strtoupper($_POST['address']);

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
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
  


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
                <input id="mob_number" name="mob_number" type="varchar" placeholder="Enter mobile number" class="form-control input-md" required onChange="return gPhone()">

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
                <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">

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

                <input type="submit" name="signup" value="Register" id="signup" class="btn btn-success">
                <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'astaff_home.php';" style="float: right;">Back</button>
                <button class="btn btn-primary" onclick="location.href = 'login.php';" style="float: right;">LOGIN</button>
                  
            </div>
        </div>

    </fieldset>
</form>
</body>
            </html>
            