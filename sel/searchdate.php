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
                    <BR>
                    <BR>
                    <BR>
                    
<!--                    <p>Dummy Heading</p>-->
                    <li class="active">
                        <a href="astaff_home.php">Home</a>
<!--                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>-->
<!--                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>-->
                    </li>
                    <li>
                        <a href="#">About</a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                           <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>

              <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Logout</a></li>
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
</html>
