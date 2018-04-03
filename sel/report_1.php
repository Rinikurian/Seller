<?php  include 'db.php';?>
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
                  	<th>Test ID</th>
                    <th>User  <i class="fa fa-sort"></i></th>

                    <th>OutBox <i class="fa fa-sort"></i></th>
                    <th>Ear</th>
                    <th>125hz</th>
                    <th>250hz</th>
                    <th>500hz</th>
                    <th>1000hz</th>
                    <th>2000hz</th>
                    <th>4000hz</th>
                    <th>8000hz</th>
                    <th>Date</th>
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

					//$sql1	=	"SELECT * FROM hearing_test order by id DESC";

        $sql1=mysqli_query($con,"select * from hearing_test where `date`='$date'");
          //$result1=mysqli_query($con,$sql1);
          while($row=mysqli_fetch_array($sql1))
          {
				?>
        <form name="form" action="#" method="POST" id="form">
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['outbox']; ?></td>
                    <td><?php echo $row['ear'];  ?></td>
                    <td><?php echo $row['125hz'];  ?></td>
                    <td><?php echo $row['250hz'];  ?></td>
                    <td><?php echo $row['500hz'];  ?></td>

                     <td><?php echo $row['1k'];  ?></td>
                    <td><?php echo $row['2k'];  ?></td>
                    <td><?php echo $row['4k'];  ?></td>
                    <td><?php echo $row['8k'];  ?></td>
                     <td><?php echo $row['date'];  ?></td>
                    <td><a href="report.php?id=<?php echo $row['id']; ?>">REPORT</a></td>
                    <td><a href="message.php?id=<?php echo $row['id']; ?>">REPLY</a></td>
                    <td><a href="delete_test.php?id=<?php echo $row['id']; ?>">Delete</a></td>

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
