
<?php
include 'db.php';

//if(!(isset($_SESSION['loginid'])))
//{
//  header('location:login.php');
//}
?>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>TECH SOLUTIONS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top" style="background-image:url('images/demo/backgrounds/pic.jpg'); background-size:cover;">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div > 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
   
      <div class="fl_right">
        <ul class="nospace">
          
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">TECH SOLUTIONS</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
            <li class="active"><a href="start.php">Home</a></li>
            
            <li><a class="drop" href="#">Register</a>
             <ul>
              <li><a href="abill_staff_registration_1.php">Billing Staff</a></li>
              
             
            </ul>
         </li><li><a class="drop" href="#">Add </a>
            <ul>
                
                <li><a href="astaff_reg.php">Staff</a></li>
                <li><a href="acustomer_reg.php">Customer details</a></li>
                <li><a href="acat_reg.php">Category details</a></li>
                <li><a href="asubcat_reg.php">SubCategory details</a></li>
              
              <li><a href="asupplier_reg.php">Supplier details</a></li>
              <li><a href="aproduct_reg.php">Product details</a></li>
            </ul>
          </li>
          
           <li><a class="drop" href="#">View</a>
            <ul>
                <li><a href="astaff_view.php">Staff details</a></li>
                <li><a href="acustomer_view.php">Customer details</a></li>
                <li><a href="acategory_view.php">Category Details</a></li>
                <li><a href="asubcategory_view.php">SubCategory details</a></li>
             
             <li><a href="asupplier_view.php">Supplier details</a></li>
              <li><a href="aproduct_view.php">Product details</a></li>
            </ul>
          </li>
          
           <li><a class="drop" href="#">Modify </a>
            <ul>
                <li><a href="aproductshow.php">Product</a></li>
                <li><a href="astaffshow.php">Staff</a></li>
                <li><a href="asuppliershow_1.php">Customer</a></li>
                <li><a href="asuppliershow.php">Supplier</a></li>
                     <li><a href="acatshow.php">Category</a></li>
                       <li><a href="asubshow.php">Subcategory</a></li>
                
                
                
              
            </ul>
          </li>
          
             <li><a class="drop" href="#">Payment </a>
            <ul>
                <li><a href="abillinvoice.php">bill</a></li>
                <li><a href="aonlinepay.php">Pay</a></li>
              
            </ul>
          </li>
           <li><a class="drop" href="#">Report </a>
            <ul>
                <li><a href="searchdate.php">Search By Date</a></li>
                 <li><a href="s.php">Stock View</a></li>
                
              
              
            </ul>
          </li>
          
          <li><a class="drop" href="signout.php">Logout</a>
            
          </li>
          
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
      <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <article>
        <div>
          <p class="heading">IT SOLUTIONS</p>
          <h2 class="heading">ENJOY SHOPPING</h2>
        
        </div>
        <footer>
          <ul class="nospace inline pushright">
           
           
          </ul>
        </footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>