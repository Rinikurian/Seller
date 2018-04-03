<?php
include 'db.php';

if(!(isset($_SESSION['staffid'])))
{
  header('location:login.php');
}
?>


<?php
if (isset($_POST['signup'])) {
    $name =strtoupper( $_POST['name']);
    $mobile= $_POST['mobile'];
   $email= $_POST['email'];
  $gstnumber= $_POST['gstnumber'];
  $address=strtoupper( $_POST['address']);

    //if ($password1 == $password) {
    //$sql = "INSERT INTO `staff`(`staff_name`,  `mob_number`, `email`, `password`,`address`, `status`) VALUES ('$staff_name','$mob_number','$email','$password1''$address',1)";


    $sql1 = "INSERT INTO `supplier`(`name`, `mobile`,`email`,`gstnumber`,`address`,`status`) VALUES ('$name','$mobile','$email','$gstnumber','$address',1)";

    $res = mysqli_query($dbcon, $sql1)or die(mysqli_error($dbcon));


    $p = "select max(supplierid) as lgid from supplier";

    $q = mysqli_query($dbcon, $p) or die(mysqli_error($dbcon));
    $row = mysqli_fetch_array($q);
    $x = $row['lgid'];




    echo '<script> alert("Registration Successful ")</script>';    
    
} else {

       echo '<script language="javascript">';
      // echo 'alert("Your password does not match")';
        echo '</script>';
    }

?>

<head>
    <title>Suppler Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/rrr.png" type="icon">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<script> function gName(){
            var name= document.form1.name.value;
                if((name===null)||(name.length<5)){
                    
                    alert("Enter Full Name");
                    document.form1.name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.form1.name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.form1.name.focus();
                      
                      return false;
                    }
                if((name.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                    document.form1.name.focus();
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
            if(document.form1.mobile.value.search(ph)==-1)
                 {
                      alert("Enter a Valid Number");
                      document.form1.mobile.focus();
                      return false;
                }
            
            var mobile=document.form1.mobile.value;
                if(isNaN(mobile)){
                    
                    alert("Phone Number Only Contain Digits");
                    document.form1.mobile.focus();
                    return false;
                }
                if(mobile.length !== 10){
                    document.form1.mobile.focus();
                    alert("Phone Number must be 10 Digits");
                    
                    return false;
                }
        }
        function  addUser(){
                var name= document.form1.name.value;
                if((name===null)||(name.length<5)){
                    document.form1.name.style.border = "1px solid red";
                    alert("Enter Full Name");
                    document.form1.name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.form1.name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.form1.name.focus();
                      document.form1.name.style.border = "1px solid red";
                      return false;
                    }
                if((name.length>25)){
                    document.form1.name.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                    document.form1.name.focus();
                    return false;
                }
                   var mobile=document.form1.mobile.value;
                if(isNaN(mobile)){
                    document.form1mobile.style.border = "1px solid red";
                    alert("Phone Number Only Contain Digits");
                    document.form1.mobile.focus();
                    return false;
                }
                if(mobile.length !== 10){
                    document.form1.mobile.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    document.form1.mobile.focus();
                    return false;
                }     
                if(mobile.length !== 10){
                    document.form1.mobile.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    document.form1.mobile.focus();
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
                
                
            
            }
                
</script>



<form name="form1" class="form-horizontal" enctype="multipart/form-data" method="post" action="" onsubmit="return addUser()">
    <fieldset>

        <!-- Form Name -->
        <div class="jumbotron">
            <h2>
                <center> Supplier Registration</center>
            </h2>
        </div>
        <br>
        <br>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Supplier Name</label>  
            <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="Enter suppler name" class="form-control input-md" required onChange="return gName()">

            </div>
        </div>




     

      


        <div class="form-group">
            <label class="col-md-4 control-label" for="name"> Mobile Number</label>  
            <div class="col-md-4">
                <input  type="tel"  id="mobile" name="mobile" placeholder="Enter mobile number" class="form-control input-md" required onChange="return gPhone()">

            </div>
        </div>
       


        


        <div class="form-group">
            <label class="col-md-4 control-label" for="street">Email</label>  
            <div class="col-md-4">
                <input id="email" name="email" type="email" placeholder="Enter your email" class="form-control input-md" required onChange="return gEmail()">

            </div>
        </div>


         



        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="gstnumber">gstnumber</label>
            <div class="col-md-4">
                <input id="gstnumber" name="gstnumber" type="text" placeholder="Enter gstnumber" class="form-control input-md" required="">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="street"> Address</label>  
            <div class="col-md-4">
                <input id="address" name="address" type="text" placeholder="Enter your local address" class="form-control input-md" required="">

            </div>
        </div>



        <!-- Button -->
        <div class="form-group" >
            <label class="col-md-4 control-label" for="signup"></label>
            <div class="col-md-4">
                
                <input type="submit" name="signup" value="REGISTER" id="signup" class="btn btn-success">
                 
                   <button class="btn btn-primary" id="" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
            </div>
        </div>

    </fieldset>
</form>
<script>
   
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
