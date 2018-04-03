<!DOCTYPE html>
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
//<?php
// include("db.php");
// ?>


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

