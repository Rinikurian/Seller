
<?php
$id=$_POST["productid"];
$productname=$_POST["productname"];
$price=$_POST["price"];
$description=$_POST["description"];

include 'db.php';
$sql="update   `seller`.`product` SET  `productname` =  '$productname',`price` =  '$price',`description` = '$description'WHERE  productid =$id";
$results=mysqli_query($dbcon,$sql);
//echo $sql;
header("location:productshow.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

</body>
</html>
