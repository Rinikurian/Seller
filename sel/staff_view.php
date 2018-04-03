<!doctype html>
<html>
<body>

<div>
 

<?php
include 'db.php';

if(!(isset($_SESSION['staffid'])))
{
  header('location:login.php');
}
?>
    <head>
    <title>Staff details</title>
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
                <center>Staff details</center>
            </h2>
        </div>
      <table border="5" style="background-color: white; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>SL.NO</th>
          <th>NAME</th>
          <th>MOBILE</th>
          <th>EMAIL</th>
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
                    echo
            "<tr>
             <td>{$row['staffid']}</td>
              <td>{$row['staffname']}</td>
              <td>{$row['mobile']}</td>
              <td>{$row['email']}</td>
             <td>{$row['address']}</td> 
            </tr>\n";
          }
          
        ?>
      <br>
    
          
              
        
    

      </tbody>
    </table>
 <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
    
    </body>
    </html