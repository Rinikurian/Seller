<!doctype html>
<?php
include 'db.php';

//if(!(isset($_SESSION['staffid'])))
//{
//  header('location:login.php');
//}
?>


<?php
if (isset($_POST['signup'])) {
     $staff_name =strtoupper( $_POST['staff_name']);
  
    $mob_number = $_POST['mob_number'];
    
  
    $email = $_POST['email'];
    
    $address = strtoupper($_POST['address']);

    // if ($password1 == $password) {
    //$sql = "INSERT INTO `staff`(`staff_name`,  `mob_number`, `email`, `password`,`address`, `status`) VALUES ('$staff_name','$mob_number','$email','$password1''$address',1)";


     $sql1="INSERT INTO `staff`(`staffname`, `mobile`, `email`,`address`, `status`) VALUES ('$staff_name','$mob_number','$email','$address',1)";

    $res = mysqli_query($dbcon, $sql1)or die(mysqli_error($dbcon));


    //$p = "select max(productid) as lgid from product";

    //$q = mysqli_query($dbcon, $p) or die(mysqli_error($dbcon));
    //$row = mysqli_fetch_array($q);
    //$x = $row['lgid'];




    echo '<script> alert("Registration Successful Please ")</script>';
//    } else {
//
//        echo '<script language="javascript">';
//        echo 'alert("Your password does not match")';
//        echo '</script>';
//    }
}
?>

<head>
    <title>Staff Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/rrr.png" type="icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<script src="js/validation.js"></script>
<style>
.navbar-default {
    
    color:white;
    
   
}

.jumbotron{
    background-color:#00CED1;
    color:white;
  padding:100px 0 2px 0;
  margin-left:7px;
}
</style>



<form name="form8" class="form-horizontal" method="post" action="" onsubmit="return addUser()" >
    <fieldset>

        <!-- Form Name -->
<!--      <nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="navbar-header">
   
  </div>
</nav>-->
<!--<nav class="navbar navbar-dark bg-dark">
   Navbar content 
</nav>-->

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
<!--<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
         Brand and toggle get grouped for better mobile display 
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TECH SOLUTIONS</a>
        </div>

         Collect the nav links, forms, and other content for toggling 
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div> /.navbar-collapse 
      </div> /.container-fluid 
    </nav>-->
        <br>
        <br>
       <br>
        <br>
       
        

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Staff Name</label>  
            <div class="col-md-4">
                <input id="staff_name" name="staff_name" type="text" placeholder="Enter your name" class="form-control input-md" onChange="return gName()" required>

            </div>
        </div>

     

      


        <div class="form-group">
            <label class="col-md-4 control-label" for="name"> Mobile Number</label>  
            <div class="col-md-4">
                <input id="mob_number" name="mob_number"  type="tel" pattern="[789][0-9]{9}" placeholder="Enter mobile number" class="form-control input-md" onChange="return gPhone()" required>

            </div>
        </div>
       

<div class="form-group">
            <label class="col-md-4 control-label" for="street"> Address</label>  
            <div class="col-md-4">
                <input id="local_address" name="address" type="text" placeholder="Enter your local address" class="form-control input-md"  pattern="^[A-Za-z-0-99999999'" required>

            </div>
        </div>
        


        <div class="form-group">
            <label class="col-md-4 control-label" for="street">Email</label>  
            <div class="col-md-4">
                <input id="driver_state" name="email" type="email" placeholder="Enter your email" class="form-control input-md" onChange="return gEmail()" required>

            </div>
        </div>

                
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="signup"></label>
            <div class="col-md-4">
<br>
        <br>
                <input type="submit" name="signup" value="Sign Up" id="signup" class="btn btn-success">
                <button class="btn btn-primary" id="" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
            </div>
        </div>

    </fieldset>
</form>
<script>
    $('body').on('click', '#btn_Product_reg', function () {
        $.ajax({
            type: 'post',
            url: 'data_save.php',
            data: {context: 'save_product'},
            success: function (response)
            {
                alert(response);
            }});
    });
    $('body').on('change', '#category_select', function () {
        $index = $('#category_select').val();
        

        $.ajax({
            type: 'post',
            url: 'get_subcat.php',
            data: {index: $index},
            success: function (response)
            {



                console.log(response);
                res = response.trim()
                 $str = "";
                if (res != "")
                {
                    $ar = response.split(",");
                   

                    for (var i = 0; i < $ar.length; i++)
                    {
                        $ss = $ar[i].split(':');
                        $str += '<option value=' + $ss[0] + '>' + $ss[1] + "</option>";
                    }
                   
                }
                 $('#subcategory_select').html($str);
            }
        });
    });

 $('body').on('change', '#subcategory_select', function () {
        $index = $('#subcategory_select').val();
         $index_id = $('#subcategory_select option selected').val();
        $('#subcategory_select option:selected').val();

        $.ajax({
            type: 'post',
//            url: 'get_subcat.php',
            data: {index: $index},
            success: function (response)
            {



                console.log(response);
                res = response.trim()
                 $str = "";
                if (res != "")
                {
                    $ar = response.split(",");
                   

                    for (var i = 0; i < $ar.length; i++)
                    {
                        $ss = $ar[i].split(':');
                        $str += '<option value=' + $ss[0] + '>' + $ss[1] + "</option>";
                    }
                   
                }
//                 $('#subcategory_select').html($str);
            }
        });
    });


//        $(document).ready(function(){  
//        $("form#register").submit(function() {
//        // we want to store the values from the form input box, then send via ajax below  
//        var productname = $('#productname').val();  
//        var description = $('#description').val();
//        //var user_pass= $('#user_pass').val();
//        //$user_name = $('#user_name').val();
//        //$user_email = $('#user_email').val();
//        //$password = $('#password').val();
//        alert(productname);
//            $.ajax({  
//                type: "POST",  
//                url: "ajax.php",  
//                data: "produtname="+ productname +"&description="+ description ,  
//                success: function(){  
//                    $('form#register').hide(function(){$('div.success').fadeIn();});  
//                }  
//            });
//            //alert("ji");
//        return false;  
//        });  
//});


</script>
<script> 
    function gName(){
            var staff_name= document.form8.staff_name.value;
                if((staff_name===null)||(staff_name.length<5)){
                    
                    alert("Enter Full Name");
                    document.form8.staff_name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.form8.staff_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.form8.staff_name.focus();
                      
                      return false;
                    }
                if((staff_name.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                    document.form8.staff_name.focus();
                    return false;
                }
        }
         function gEmail(){
            var email=document.form8.email.value;
                var atpos = email.indexOf("@");
                var dotpos = email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>email.length)){
                    
                    document.form8.email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
        }
        function gPhone(){
         
            var ph=/^([7-9]{1})([0-9]{9})$/;
            if(document.form8.mob_number.value.search(ph)==-1)
                 {
                      alert("Enter a Valid Number");
                      document.form8.mob_number.focus();
                      return false;
                }
            
            var mob_number=document.form8.mob_number.value;
                if(isNaN(mob_number)){
                    
                    alert("Phone Number Only Contain Digits");
                    document.form8.mob_number.focus();
                    return false;
                }
                if(mob_number.length !== 10){
                    document.form8.mob_number.focus();
                    alert("Phone Number must be 10 Digits");
                    
                    return false;
                }
        }
            function gPwd(){
            var password= document.form8.password.value;
                var password1=document.form8.password1.value;
                if(password.length < 4 ){
                    document.form8.password.style.border = "1px solid red";
                    document.form8.password.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(password !== password1){
                    document.form8.password1.style.border = "1px solid red";
                    document.form8.password1.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
        }
        function  addUser(){
                var staff_name= document.form8.staff_name.value;
                if((staff_name===null)||(staff_name.length<5)){
                    document.form1.staff_name.style.border = "1px solid red";
                    alert("Enter Full Name");
                    document.form8.staff_name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.form8.staff_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.form8.staff_name.focus();
                      document.form8.staff_name.style.border = "1px solid red";
                      return false;
                    }
                if((staff_name.length>25)){
                    document.form8.staff_name.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                    document.form8.staff_name.focus();
                    return false;
                }
               var ph=/^([7-9]{1})([0-9]{9})$/;
                if(document.form8.mob_number.value.search(ph)==-1)
                 {
                      alert("Enter a Valid Number");
                      document.form8.mob_number.focus();
                      return false;
                }
                var mob_number=document.form8.mob_number.value;
                if(isNaN(mob_number)){
                    document.form8.mob_number.style.border = "1px solid red";
                    alert("Phone Number Only Contain Digits");
                    document.form8.mob_number.focus();
                    return false;
                }
                if(mob_number.length !== 10){
                    document.form8.mob_number.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    document.form8.mob_number.focus();
                    return false;
                }
                                    
                var email=document.form8.email.value;
                var atpos = email.indexOf("@");
                var dotpos = email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>email.length)){
                    
                    document.form8.email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
                
                
                var password= document.form8.password.value;
                var password1=document.form8.password1.value;
  
                
                if(password.length < 4 ){
                    document.form8.password.style.border = "1px solid red";
                    document.form8.password.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(password !== password1){
                    document.form8.password1.style.border = "1px solid red";
                    document.form8.password1.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
                var fpwd=/^[a-z0-9]{4,25}$/;
                if(document.form8.password.value.search(fpwd)==-1)
                 {
                      alert("Lowercase Letters,numbers(0-9) are allowed,Password Should not exceed 25 Characters");
                      document.form8.password.focus();
                      
                      return false;
                }
            }
                
</script>
