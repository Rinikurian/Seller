<?php
$id=$_REQUEST['id'];
include 'db.php';
$sql="delete from product where productid=$id";
$results=mysqli_query($dbcon,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:productshow.php")
?>