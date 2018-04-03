<?php
$id=$_REQUEST['id'];
include 'db.php';
$sql="delete from supplier where supplierid=$id";
$results=mysqli_query($dbcon,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:asuppliershow.php")
?>