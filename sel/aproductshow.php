
<?php 
include_once "db.php";
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

             
	
    <body >
       <div class="jumbotron">
            <h2>
                <center> PRODUCT SHOW</center>
            </h2>
        </div>

        <table align="center" border="5" style="  color: #761a9b; margin: 0 auto;" >
 
               <thead>
        <tr>
          <th>PHOTO</th>
          <th>NAME</th>
          <th>PRICE</th>
          <th>DESCRIPTION</th>
          <th colspan="2">ACTION</th>
         
        </tr>
      </thead> 
             <tbody>

 
<?php
$results=mysqli_query($dbcon,"select * from product");
while($row=mysqli_fetch_array($results))
{

?>
<td><img src="<?php echo $row['productimage']; ?>" width="75px" height="75px" /></td>
<td><?php echo $row['productname']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['description']; ?></td>

 

<td><a href="aproductedit.php?id=<?php echo $row['productid'];?>" >Edit</a></td>
<td><a href="aproductdelete.php?id=<?php echo $row['productid'];?>">Delete</a></td>
</tr>
<?php } ?>
</tbody>
             
</table>
   <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'astaff_home.php';" style="float: right;">Back</button>               
</body>
             
</html>
