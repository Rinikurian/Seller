

 <?php
 include("db.php");
 ?>
<html>
    
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/table.css">
</head>
 <div class="jumbotron">
            <h2>
                <center> PRODUCT DETAILS</center>
            </h2>
        </div>

<table class="table table-bordered">                     
   
        <thead>
            <tr>
                <th>SL.NO</th>
              <th>NAME</th>
              <th>IMAGE</th>
              <th>DESCRIPTION</th>
              
            </tr>
        </thead>
        <tbody>
<?php 


        $sql="SELECT * FROM product";
        $result=mysqli_query($dbcon,$sql);
        $i=0;
        while($row=mysqli_fetch_array($result))
                {


        echo '<tr>
                  <td scope="row">' . $row["productid"]. '</td>
                     
                  <td>' . $row["productname"] .'</td>
                  <td> '.$row["productimage"] .'</td>
                  <td> '.$row["description"] .'</td>
               
                </tr>';





    }
          
?>
       </tbody>
    </div>
</table>
 <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
    </html>
