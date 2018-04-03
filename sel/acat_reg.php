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
  <style>
            a{
                color: white !important;
            
            }
        </style>
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
                        
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Add</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="astaff_reg.php">Staff</a></li>
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
    $categoryname =strtoupper( $_POST['categoryname']);
    
    
   // if ($password1 == $password) {
        //$sql = "INSERT INTO `staff`(`staff_name`,  `mob_number`, `email`, `password`,`address`, `status`) VALUES ('$staff_name','$mob_number','$email','$password1''$address',1)";

      
        $sql1="INSERT INTO `category`(`categoryname`,`status`) VALUES ('$categoryname',1)";
        
        $res = mysqli_query($dbcon, $sql1)or die(mysqli_error($dbcon));


        $p = "select max(categoryid) as lgid from category";

        $q = mysqli_query($dbcon, $p) or die(mysqli_error($dbcon));
        $row = mysqli_fetch_array($q);
        $x = $row['lgid'];




        echo '<script> alert("Registration Successful ")</script>';
//    } else {
//
//        echo '<script language="javascript">';
//        echo 'alert("Your password does not match")';
//        echo '</script>';
//    }
}
?>

<head>
    <title>Category Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/rrr.png" type="icon">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<script src="js/validation.js"></script>



<form name="form1" class="form-horizontal" method="post" action="" onsubmit="return ValidationEvent()">
    <fieldset>

        <!-- Form Name -->
     
        <br>
        <br>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Category Name</label>  
            <div class="col-md-4">
                <input id="categoryname" name="categoryname" type="text" placeholder="Enter category name" class="form-control input-md" required="">

            </div>
        </div>            

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="signup"></label>
            <div class="col-md-4">

                <input type="submit" name="signup" value="SAVE" id="signup" class="btn btn-success">
                <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'astaff_home.php';" style="float: right;">Back</button>
            </div>
        </div>

    </fieldset>
</form>
<!--  jQuery CDN 
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         Bootstrap Js CDN 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         jQuery Custom Scroller CDN 
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
        </script>-->
<!--// <script>
//             $('body').on('click', '#btn_Product_reg', function () {
//             $.ajax({
//            type:'post',
//                    url:'data_save.php',
//                    data:{context:'save_product'},
//                    success:function(response)
//                    {
//                        alert(response);
//                    }});
//         });
//        $('body').on('change', '#category_select', function () {
//            $index = $('#category_select').val();
//           
//            $.ajax({
//            type:'post',
//                    url:'get_subcat.php',
//                    data:{index:$index},
//                    success:function(response)
//                    {
//                    console.log(response);
//                    $ar = response.split(",");
//                            $str = "";
//                            for (var i = 0; i < $ar.length; i++)
//                    {
//                        $ss=$ar[i].split(':');
//                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
//                    }
//                    $('#subcategory_select').html($str);
//                    }
//                    });
     //   });


             
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
                }  
            });
            //alert("ji");
        return false;  
        });  
});


//</script>-->
 <!-- jQuery CDN -->
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
            </body>
            </html>



