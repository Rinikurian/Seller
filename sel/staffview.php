

 <?php
include 'db.php';

if(!(isset($_SESSION['staffid'])))
{
  header('location:login.php');
}
?>
<html>
    
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/table.css">
</head>
 <div class="jumbotron">
            <h2>
                <center> Staff details</center>
            </h2>
        </div>

<table class="table table-bordered">                     
   
        <thead>
            <tr>
              <th>SL.NO</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>MOBILE</th>
               <th>ADDRESS</th>
            </tr>
        </thead>
        <tbody>
<?php 


        $sql="SELECT * FROM staff";
        $result=mysqli_query($dbcon,$sql);
        $i=0;
        while($row=mysqli_fetch_array($result))
                {


        echo '<tr>
                  <td scope="row">' . $row["staffid"]. '</td>
                  <td>' . $row["staffname"] .'</td>
                  <td> '.$row["mobile"] .'</td>
                  <td> '.$row["email"] .'</td>
                  <td> '.$row["address"] .'</td>
                </tr>';





    }
          
?>
       </tbody>
    </div>
</table>
    </html>
