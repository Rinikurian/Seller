<?php
include 'db.php';
?>
<table cellpadding="10">
<tr>
<td>IMAGE</td>
<td>Name</td>
<td>PRICE</td>
<td>DESCRIPTION</td>

</tr>

<?php


$query="SELECT * FROM product";
$result=mysql_query($query);
mysql_close();

while ($row=mysql_fetch_array($result)){
echo ("<tr><td>$row[productid]</td>");
echo ("<td>$row[productname]</td>");
echo ("<td>$row[productimage]</td>");
echo ("<td>$row[price]</td>");
echo ("<td>$row[description]</td>");
echo ("<td><a href=\"StudentEdit.php?id=$row[id]\">Edit</a></td></tr>");
}
echo "</table>";

?>