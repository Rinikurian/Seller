<?php

include_once 'db.php';
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($dbcon, "SELECT productid,productname FROM product where subcategoryid='" . $index . "' and status=1");
    //var_dump($q);
    $str = "";
    while ($row = mysqli_fetch_array($q)) {
        $str .=$row['productid'] .":".$row['productname'] . ",";
    }
    echo rtrim($str,",");
}
?>