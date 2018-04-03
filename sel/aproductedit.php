<?php
include 'db.php';
?><html>
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
                <center> Product Edit</center>
            </h2>
        </div>
    
    
   
     
      
   
   
   

<?php
$id=$_GET['id'];

$sql="select * from product where productid='$id'";
$results=mysqli_query($dbcon,$sql);
//echo $sql;
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>

<body>
<form action="aproductupdate.php" method="post">
<table align="center" width="200" border="1">
  <tr><font color="black"<html>
<tr><td><font color="black">&nbsp;Photo</font></td>
<td><img src="<?php echo $row['productimage']; ?>" width="75px" height="75px" /></td></tr>
<tr><td><font color="black">&nbsp;Product name</font></td>
    <td><input name="productname" type="text" value="<?php echo $row['productname']; ?>" readonly/></td></tr>
 <tr><td><font color="black">&nbsp;price</font></td>
<td><input name="price" type="text" value="<?php echo $row['price']; ?>"/></td></tr>
<tr><td><font color="black">&nbsp;description</font></td>
<td><input name="description" type="text" value="<?php echo $row['description']; ?>"/></td></tr>

<tr><td><input type="hidden" name="productid" value="<?php echo $row['productid']; ?>" /> </td></tr>
<tr><td> <input type="submit" value="update"  name="ok"/> </td></tr>
</font>
</tr>
</table>
     <button class="btn btn-primary" id="" onclick="location.href = 'astaff_home.php';" style="float: right;">Back</button>
</form>
</body>
</html>
