<html>
<body>

<div>
 

 <?php
 include("db.php");
 ?>
    <html>
        <head>
    <title>Supplier details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
   <style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 60%;
}

th, td {
    padding: 15px;
}
</style>
   
</head>
      <div class="jumbotron">
            <h2>
                <center>Search Details</center>
            </h2>
        </div>


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
  
  
</html>
