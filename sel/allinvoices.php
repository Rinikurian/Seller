<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invoice</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <p FONT align="left">Organish Puraa Milk, Islamabad
</p>
  <table width="242" border="1" cellspacing="2" cellpadding="10">
    <tr>
      <th width="214" scope="col"><h5>CUSTOMER MONTHLY INVOICE</h5></th>
    </tr>
  </table>
  <p  align="left"><u>CUSTOMER DETAILS</u></p>
  <p>NAME:
    <?php
  echo"$CustomerFullName";
  ?>
  </p>
  <p align="left">H.No:<?php echo"$Hosuenumber"; 
  ?>   St.No:<?php echo"$StreetNumber";?> </p>
  <p align="left">Sector:<?php echo"$Sector";?></p>
<p  align="left" ><U><strong>BILL DETAILS</strong></U>
    <table border="1" align="center">
        <tr>
            <td width="120">Milk Delivered</td>
            <td width="104">Date</td>
        </tr>
        <?php foreach($returned_results2 as $key){
         ?>
            <tr>
                <td><?php echo $key['MilkDelieveredCow']; ?></td>
                <td><?php echo $key['DeliveryDate']; ?></td>
            </tr>
        <?php
        } ?>
    </table>
</p>
<p  align="center" ></p>
  <div align="justify"></div>
  <p  align="left">Total Milk Delivered(Litres): Buffalo:<?php echo"$MilkDelieveredBuffalow"?>  Cow:<?php echo"$MilkDelieveredcow" ?></p>
<p align="left">Cost of Milk Delivered (Rs.) Cow::<?php echo "$t_amount_cow";?>  Buffalo:<?php echo"$t_amount_buff";?></p>
  <p align="left">Bill Payable for the month of June 2013: Rs.<?php echo"$";?>
    <input type="button"" value="Print" onClick="window.print()" />
  </p>
</form>
</body>
</html>