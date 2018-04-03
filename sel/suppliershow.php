
<?php
include 'db.php';

if(!(isset($_SESSION['staffid'])))
{
  header('location:login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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


        <body>
       <div class="jumbotron">
            <h2>
                <center> Supplier Show</center>
            </h2>
        </div>
    

      <table border="5" style="background-color: white; color: #761a9b; margin: 0 auto;" >
<thead>
        <tr>
          <th>NAME</th>
          <th>MOBILE</th>
          <th>EMAIL</th>
          <th>GSTNUMBER</th>
          <th>ADDRESS</th>
          <th colspan="2">ACTION</th>
         
        </tr>
      </thead>
      <tbody>




<?php
$results=mysqli_query($dbcon,"select * from supplier");
while($row=mysqli_fetch_array($results))
{

?>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['gstnumber']; ?></td>
<td><?php echo $row['address']; ?></td>

 

<td><a href="supplieredit.php?id=<?php echo $row['supplierid'];?>" >Edit</a></td>
<td><a href="supplierdelete.php?id=<?php echo $row['supplierid'];?>">Delete</a></td>
</tr>
<?php } ?>
      </tbody>
          
           <button class="btn btn-primary" id="" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
</table>
</body>
</html>
