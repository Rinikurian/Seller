<?php
include_once 'db.php';

?>


<?php
if (isset($_POST['signup'])) {
     $customername = strtoupper($_POST['customername']);
  
    $mob_number = $_POST['mob_number'];
    
  
    $email = $_POST['email'];
    
    $address =strtoupper( $_POST['address']);

    // if ($password1 == $password) {
    //$sql = "INSERT INTO `staff`(`staff_name`,  `mob_number`, `email`, `password`,`address`, `status`) VALUES ('$staff_name','$mob_number','$email','$password1''$address',1)";


     $sql1="INSERT INTO `costumer`(`customername`, `mobile`, `email`,`address`, `status`) VALUES ('$customername','$mob_number','$email','$address',1)";

    $res = mysqli_query($dbcon, $sql1)or die(mysqli_error($dbcon));


    //$p = "select max(productid) as lgid from product";

    //$q = mysqli_query($dbcon, $p) or die(mysqli_error($dbcon));
    //$row = mysqli_fetch_array($q);
    //$x = $row['lgid'];




    echo '<script> alert("Registration Successful  ")</script>';
//    } else {
//
//        echo '<script language="javascript">';
//        echo 'alert("Your password does not match")';
//        echo '</script>';
//    }
}
?>

<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/rrr.png" type="icon">
</head>

<script> function gName(){
            var customername= document.form1.customername.value;
                if((customername===null)||(customername.length<5)){
                    
                    alert("Enter Full Name");
                    document.form1.customername.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.form1.customername.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.form1.customername.focus();
                      
                      return false;
                    }
                if((customername.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                    document.form1.customername.focus();
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
            var mob_number=document.form1.mob_number.value;
                if(isNaN(mob_number)){
                    
                    alert("Phone Number Only Contain Digits");
                    document.form1.mob_number.focus();
                    return false;
                }
                if(mob_number.length !== 10){
                    document.form1.mob_number.focus();
                    alert("Phone Number must be 10 Digits");
                    
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
                var customername= document.form1.customername.value;
                if((customername===null)||(customername.length<5)){
                    document.form1.customername.style.border = "1px solid red";
                    alert("Enter Full Name");
                    document.form1.customername.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.form1.customername.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.form1.customername.focus();
                      document.form1.customername.style.border = "1px solid red";
                      return false;
                    }
                if((customername.length>25)){
                    document.form1.customername.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                    document.form1.customername.focus();
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
                if(document.form1.password.value.search(fpwd)==-1)
                 {
                      alert("Lowercase Letters,numbers(0-9) are allowed,Password Should not exceed 25 Characters");
                      document.form1.password.focus();
                      
                      return false;
                }
            }
                
</script>



<form id="form1" name="form1" class="form-horizontal" method="post" action=""  onsubmit="return addUser()">
    <fieldset>

        <!-- Form Name -->
       <div class="jumbotron">
        <h2>
            <center> Customer Registration</center>
        </h2>
    </div>
        <br>
        <br>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Customer Name</label>  
            <div class="col-md-4">
                <input id="customername" name="customername" type="text" placeholder="Enter  name" class="form-control input-md" required onChange="return gName()" >

            </div>
        </div>

     

      


        <div class="form-group">
            <label class="col-md-4 control-label"> Mobile Number</label>  
            <div class="col-md-4">
                <input id="mob_number" name="mob_number"  type="number" placeholder="Enter mobile number" class="form-control input-md" required onChange="return gPhone()">

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
                <input id="driver_state" name="email" type="email" placeholder="Enter your email" class="form-control input-md" required onChange="return gEmail()">

            </div>
        </div>

                
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="signup"></label>
            <div class="col-md-4">

                <input type="submit" name="signup" value="REGISTER" id="signup" class="btn btn-success">
                <button class="btn btn-primary" id="" onclick="location.href = 'astaff_home.php';" style="float: right;">Back</button>
               
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
