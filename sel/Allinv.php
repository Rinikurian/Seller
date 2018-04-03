<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- For Google -->
    <link rel="author" href="https://plus.google.com/+Scoopthemes">
    <link rel="publisher" href="https://plus.google.com/+Scoopthemes">
    <!-- for Twitter -->          
    <meta name="twitter:card" content="photo">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="">
    <!-- for Facebook OpenGraph -->          
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    
    <!-- Canonical -->
    <link rel="canonical" href="">

    <title>Sidebar Layout - Scoop Themes Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http:css/bootstrap.min_1.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Main Styles CSS -->
    <link href="css/main_1.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <aside id="sideBar">
            <ul class="main-nav">
                <!-- Your Logo Or Site Name -->
                <h2><font  color="white">TECH SOLUTIONS</font></h2>
                <br>
                <br>
<br>
<br>
<br>
<br>

                <!-- Search -->
                
<!--                <li class="main-search">
                    <form action="#">
                        <input type="text" class="form-control search-input" placeholder="Search here...">
                        <i class="fa fa-search"></i>
                    </form>
                </li>-->
                <li>
                    <a href="">- REGISTER</a>
                </li>
               <li>
                        
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                           <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                <li>
                    <a href="#">-ADD</a>
                </li>
                <li>
                    <a href="#">- VIEW</a>
                </li>
                <li>
                    <a href="#">- MODIFY</a>
                </li>
                <li>
                    <a href="#">- PAYMENT</a>
                </li>
                <li>
                    <a href="#">-REPORT</a>
                </li>
<!--                <li>
                    <a href="#">- App Views</a>
                </li>
                <li>
                    <a href="#">- Another Menu item</a>
                </li>-->
            </ul>
        </aside>

        <!-- Main Section -->
        <section class="main-section">
            <!-- Add Your Content Inside -->
            <div class="content">
                <br>

<br>
<br>
                <!-- Remove This Before You Start -->
                  <nav class="navbar navbar-default">
                      
                    <div class="container-fluid">
                        

                        <div class="navbar-header">
                            <div class="form-group">
                    <button id="menuToggler" class="btn btn-primary">Press me to toggle</button>
                </div>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                           
                               
                                <h3>TECH SOLUTIONS</h3>
                               
                            </ul>
                        </div>
                    </div>
                </nav>
<!--                <h1>Sidebar Starter Template</h1>
                <p>By <a href="http://scoopthemes.com">Scoop Themes</a> sidebar webstarter template <a href="http://getbootstrap.com/">Bootstrap 3.3.0</a> based.</p>
                <div class="form-group">
                    <button id="menuToggler" class="btn btn-primary">Press me to toggle</button>
                </div>-->

<br>
<br>
<br>
<br>
<br>





               <form action="#" name="myform" method="POST" class="form-inline">
        Select By Date
        <input type="date"  placeholder="YYYY-MM-DD"name="date" id="date" class="input-medium" />
 &nbsp;

 <input type="submit" class="btn-primary" name="myday" value="Search" id="myday" />
<br><br>
        <div class="row">
            <div class="table-responsive">
                <?php
                
                if(isset($_POST['myday']))
                 {
                   $date=$_POST["date"];
                   echo $date;
                    $sql1=mysqli_query($dbcon,"select * from invoice where `date`='$date'");
                    $row_num= mysqli_num_rows($sql1);
                    if($row_num != 0){
        ?>
              <table class="table table-bordered table-hover tablesorter">
                <thead>
                  <tr>
                  	

                    <!--<th>OutBox <i class="fa fa-sort"></i></th>-->
           
        
        <th>ITEM</th>
        <th>SPECIFICATION</th>
        <th>COST</th>
        <th>PRICE</th>
        <th>QTY</th>
        
        <th>TOTAL</th>
        <th>PAID</th>
        <th>BALANCEDUE</th>
        <th>REPORT </th>
                   
                    
                  </tr>
                </thead>
                <tbody>
                <?php

          //$result1=mysqli_query($dbcon,$sql1);
          while($row=mysqli_fetch_array($sql1))
          {
				?>
        <form name="form" action="#" method="POST" id="form">
                 
            <tr>
                    
                   
                   
                    <td><?php echo $row['Item']; ?></td>
                    <td><?php echo $row['specification'];  ?></td>
                    <td><?php echo $row['cost'];  ?></td>
                    <td><?php echo $row['price'];  ?></td>
 
                     <td><?php echo $row['qty'];  ?></td>
                    
                    <td><?php echo $row['total'];  ?></td>
                    <td><?php echo $row['paid'];  ?></td>
                     <td><?php echo $row['balancedue'];  ?></td>
                    
<td><a href="report.php?id=<?php echo $row['invoiceid'];?>">REPORT</a></td>

                  
<!--                    <td><a href="delete_test.php?id=<?php echo $row['id']; ?>">Delete</a></td>-->
                  </tr>

                  </tr>

                  </tr>
                  </form>
                
                 <?php
               }
                    }
                    else{
                        echo "No items";
                    }
             }

				 ?>
                </tbody>
                
              </table>
                <a href="astaff_home.php"><img src="images/back.png" height="80"</a>
                
           <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<!--<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>-->

            </body>
  





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
            </div>
            <!-- /.content -->
        </section>
        <!-- /.main-section -->


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>

    <!-- Call functions on document ready -->
    <script>
        $(document).ready(function() {
            // Call Menu Toggler
            appMaster.menuToggler();
            // Example Call anotherFunction
            appMaster.anotherFunction();
        });
    </script>

</body>

</html>
