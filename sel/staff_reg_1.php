<!doctype html>
<?php
include 'db.php';

if(!(isset($_SESSION['staffid'])))
{
  header('location:login.php');
}
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
</head>

<script src="js/validation.js"></script>



<form name="form8" class="form-horizontal" method="post" action="" onsubmit="return addUser()" >
    <fieldset>

        <!-- Form Name -->
       <div class="jumbotron">
        <h2>
            <center> Staff Registration</center>
        </h2>
    </div>
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

                <input type="submit" name="signup" value="REGISTER" id="signup" class="btn btn-success">
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
