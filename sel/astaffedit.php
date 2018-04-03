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
                <center> Staff Edit</center>
            </h2>
        </div>



</div>
    
    
   
     
      
   
   
   

<?php
$id=$_GET['id'];

$sql="select * from staff where staffid='$id'";
$results=mysqli_query($dbcon,$sql);
//echo $sql;
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>

<body>
<form action="astaffupdate.php" method="post">
<table align="center" width="200" border="1">
  <tr><font color="black"<html>

<tr><td><font color="black">&nbsp;Staff name</font></td>
<td><input name="staffname" type="text" value="<?php echo $row['staffname']; ?>" readonly/></td></tr>
 <tr><td><font color="black">&nbsp;Mobile</font></td>
<td><input name="mobile" type="text" value="<?php echo $row['mobile']; ?>"/></td></tr>
<tr><td><font color="black">&nbsp;Email</font></td>
<td><input name="email" type="text" value="<?php echo $row['email']; ?>"/></td></tr>
<tr><td><font color="black">&nbsp;Address</font></td>
<td><input name="address" type="text" value="<?php echo $row['address']; ?>"/></td></tr>
<tr><td><input type="hidden" name="staffid" value="<?php echo $row['staffid']; ?>" /> </td></tr>
<tr><td> <input type="submit" value="update"  name="ok"/> </td></tr>
</font>
</tr>
   
</table>
     <button class="btn btn-primary" id="" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
</form></table>
</body>
</html>
