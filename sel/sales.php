<html>
    <head>
    <title>Product Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/sty.css">
    <link rel="icon" href="images/rrr.png" type="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    
</head>
<body>
    <?php
 include("db.php");
 ?>
<div class="clearfix"></div>

    <div class="col-md-12 col-sm-12 products_parent">


        <div class="col-md-3 col-sm-2 refine_result_child">

            <div class="col-md-12 col-sm-12 user_profile_head">
                <div class="col-md-3 col-sm-4 first_">
                    <svg height="50" width="50">
                    <circle id="circle_user" cx="23" cy="30" r="15" stroke="none" stroke-width="1" fill="#6d7fcc" />
                    <text x="17" y="35" fill="black" style="font-size:1.5em;" >A</text>
                    </svg> 
                </div>
                <div class="col-md-9 col-sm-8 user_name">
                    <div class="col-md-12 hello">
                      <h2>TECHSOLUTIONS</h2>
                    </div>
<!--                    <div class="col-md-12 helload">
                        <h5><b>Admin</b></h5>
                    </div>-->
                </div>
                <div class="col-md-offset-3">
                </div>
                
            </div>
            
            <div class="clearfix"></div>
            <hr/>
            
            <div class="col-md-12 col-sm-2 refine_content_admin">

                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" id="drop_down" type="button" data-toggle="dropdown">HOME
                        <span class="caret" id="drop_caret"></span></button>
                    <ul class="dropdown-menu" id="drop_menu">
                        <li><a href="#" id="mng_location">Add Location</a></li>
                        <li><a href="#" id="mng_apr_prd">Approve Product</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <hr/>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" id="drop_down" type="button" data-toggle="dropdown">ADD DATA
                        <span class="caret" id="drop_caret"></span></button>
                    <ul class="dropdown-menu" id="drop_menu">
                        <li><a href="astaff_reg.php "id="view_cust">Staff</a></li>
                        <li><a href="abill_staff_registration_1.php" id="view_loc">Billstaff</a></li>
                        <li><a href="acat_reg.php"id="view_prd_type">Category</a></li>
                        <li><a href="asubcat_reg.php"id="view_prd">SubCategory</a></li>
                        <li><a href="aproduct_reg.php">Product</a></li>
<!--                        <li><a href="#" id="view_cust">Customers</a></li>
                        <li><a href="#" id="view_prd">Added Product</a></li>
                        <li><a href="#" id="view_prd_type">Product Type</a></li>
                        <li><a href="#" id="view_loc">Location Details</a></li>-->
                    </ul>
                </div>
                <div class="clearfix"></div>
                <hr/>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" id="drop_down" type="button" data-toggle="dropdown">Edit Data
                        <span class="caret" id="drop_caret"></span></button>
                        
                    <ul class="dropdown-menu" id="drop_menu">
                        <li><a href="#" id="edit_prd">Product</a></li>
                        <li><a href="#" id="edit_loc">Location</a></li>

                    </ul>
                </div>
                <div class="clearfix"></div>
                <hr/>


                <div class="clearfix"></div>


                <!--<div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1273874"><span style="color:gray;">Current local time in</span><br />Cochin, India</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=Asia%2FKolkata" width="100%" height="90" frameborder="0" seamless></iframe> </div>-->
                  <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Logout</a></li>
<!--                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>-->
                </ul>
            </div>
            
            <hr/>
            <br/>


            <div class="clearfix"></div>

            <br/>

 
        </div>
        
        <div>
            
        </div>

        <div class="col-md-9 col-sm-8 sub_main_head_child_child" id="sub_main_head_admin_product_display">
            
<!--            <div class="container-fluid">

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
                    </div>-->
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
            
 
  




        </div>
        </div>





    </div>
    
    <div class="clearfix"></div>
    
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>