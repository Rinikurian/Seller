<?php
include_once 'db.php';

?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>View Test</small></h1>

            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
        </div><!-- /.row -->


<form action="#" name="myform" method="POST" class="form-inline">
        Select By Date
        <input type="text"  placeholder="YYYY-MM-DD"name="date" id="date" class="input-medium" />
 &nbsp;

 <input type="submit" class="btn-primary" name="myday" value="Search" id="myday" />
<br><br>
        <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-hover tablesorter">
                <thead>
                  <tr>
                  	

                    <!--<th>OutBox <i class="fa fa-sort"></i></th>-->
           <th>ID</th>
          <th>DUE</th>
        <th>DATE</th>
        <th>ITEM</th>
        <th>SPECIFICATION</th>
        <th>COST</th>
        <th>PRICE</th>
        <th>QTY</th>
        <th>SUBTOTAL</th>
        <th>TOTAL</th>
        <th>PAID</th>
        <th>BALANCEDUE</th>
        <th>Report </th>
                    <th>Message </th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php

                if(isset($_POST['myday']))
                 {
                   $date=$_POST["date"];
                   echo $date;

					

        $sql1=mysqli_query($dbcon,"select * from invoice where `date`='$date'");
          //$result1=mysqli_query($dbcon,$sql1);
          while($row=mysqli_fetch_array($sql1))
          {
				?>
        <form name="form" action="#" method="POST" id="form">
                 
            <tr>
                    <td><?php echo $row['invoiceid']; ?></td>
                    <td><?php echo $row['due']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['Item']; ?></td>
                    <td><?php echo $row['specification'];  ?></td>
                    <td><?php echo $row['cost'];  ?></td>
                    <td><?php echo $row['price'];  ?></td>

                     <td><?php echo $row['qty'];  ?></td>
                    <td><?php echo $row['subtotal'];  ?></td>
                    <td><?php echo $row['total'];  ?></td>
                    <td><?php echo $row['paid'];  ?></td>
                     <td><?php echo $row['balancedue'];  ?></td>
                    
<td><a href="report.php?id=<?php echo $row['id']; ?>">REPORT</a></td>
                    <td><a href="message.php?id=<?php echo $row['id']; ?>">REPLY</a></td>
                    <td><a href="delete_test.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                  </tr>

                  </tr>

                  </tr>
                  </form>
                 <?php
               }
             }

				 ?>
                </tbody>
              </table>
            </div>

        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
