<?php
include 'db.php';


if (!empty($_POST["item_id"])) {

  $item_id = $_POST["item_id"];
  echo $item_id;
 // $_SESSION['category_id']=$_POST["category_id"];
  $query = "SELECT * FROM subcategory WHERE categoryid =$item_id";

  $results = mysqli_query($dbcon, $query);
  ?>
  <option >subcategory</option>
  <?php

  foreach($results as $subc){
    ?>

  <option value="<?php echo $subc["subcategoryid"]; ?>"> <?php echo ucfirst($subc["subcategoryname"]); ?></option>

     <?php
}
}
?>
