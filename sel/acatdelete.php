<?php
$id=$_REQUEST['id'];
include 'db.php';
$sql="delete from category where categoryid=$id";
$results=mysqli_query($dbcon,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:catshow.php")
?>