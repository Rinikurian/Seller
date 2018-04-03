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

</div>

   

<?php
$id=$_GET['id'];

$sql="select * from category where categoryid='$id'";
$results=mysqli_query($dbcon,$sql);
//echo $sql;
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>

<body>
    <div class="jumbotron">
            <h2>
                <center> Category Edit</center>
            </h2>
        </div>
<form action="catupdate.php" method="post">
<table align="center" width="200" border="3">
  <tr><font color="black"<html>

<tr><td><font color="black">&nbsp;Product name</font></td>
    <td><input name="categoryname" type="text" value="<?php echo $row['categoryname']; ?>" /></td></tr>
 

<tr><td><input type="hidden" name="categoryid" value="<?php echo $row['categoryid']; ?>" /> </td></tr>
<tr><td> <input type="submit" value="update"  name="ok"/> </td></tr>
</font>
</tr>
</table>
     <button class="btn btn-primary" id="" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
</form></table>
</body>
</html>
