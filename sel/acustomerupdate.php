
<?php
$id=$_POST["customerid"];
$customername=$_POST["customername"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$address=$_POST["address"];

include 'db.php';
$sql="update   `seller`.`costumer` SET  `customername` =  '$customername',`mobile` =  '$mobile',`email` = '$email', `address` =  '$address' WHERE  customerid =$id";
$results=mysqli_query($dbcon,$sql);
//echo $sql;
header("location:acustomershow.php");
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
