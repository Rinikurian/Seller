
<?php 
include_once "db.php";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
	background-image:url(gh.jpg);
	background-size:cover;
}

body {margin:0;}
a
{
	font-size:20px;
	color:white;
  text-decoration: none;
	font-family:Cambria;
}
a:hover
{
	color:red;
}
.header
{
	font-size:48px;
	font-family:Vladimir Script;
	height:50px;
	margin-top:0px;
	margin-bottom:20px;
	background-color:black;
	color:red;
  text-shadow: 1px 1px 2px black, 0 0 100px blue, 0 0 5px darkblue;
}
.dropdown
{
position: relative;
display: inline-block;
}
.dropdown-content
 {
	z-index:2;
	border-radius: 5px;
	font-size:20px;
  display: none;
  position: absolute;
  background-color: black;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	box-width:10%;
  padding: 12px 24px;
}
.dropdown:hover .dropdown-content
  {
  display: block;
  }
span
{
	color:white;
	text-decoration:none;
	font-family:Copperplate Gothic;
	font-size:20px;
	padding: 6spx 12px;
}
.button
 {
  	background-color: #ffaa00;
    border: none;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    margin: 1px 1px;
    cursor: pointer;
	border-radius:3px;
    text-align:center;
    margin-bottom:2px;
	overflow:hidden;
}
 .footer
  {
	  width:100%;
	  height:20%;
	  background-color:black;
	  float:left;
	  position:relative;
	  text-align:center;
	  color:white;
  }

li {
    float:right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #1a1a00;
}

.active {
    background-color: white;
}
h1 {
    text-shadow: 2px 2px #FF0000;
}
p {
    text-indent: 5px;
}
.left {
    position: relative;
    right: 0px;
    width: 300px;
    float:left;
    padding: 10px;
}
.right {
    position: absolute;
    right: 0px;
    width: 300px;
    float:left;
    padding: 10px;
}
  .dropdown
{
position: relative;
display: inline-block;
}
.dropdown-content
 {
	z-index:2;
	border-radius: 5px;
	font-size:20px;
  display: none;
  position: absolute;
  background-color: black;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	box-width:10%;
  padding: 12px 24px;
}
.dropdown:hover .dropdown-content
  {
  display: block;
  }
img.i
{
float:right;
 top: 150px;
    right: 70px;
}

</style>

               
	



<table align="center" width="200" border="1">
  <tr><font color="black"<html>
    <head>
        <title>customer view
        </title>
    </head>

    <body>

<table align="center" width="200" border="1">
  <tr><font color="black"<html>
    <head>
        <title>registration
        </title>
    </head>

    <body>



</div>
 
    <td><font color="black">&nbsp;Customer Name</font></td>
    <td><font color="black">&nbsp;Mobile</font></td>
     <td><font color="black">&nbsp;Email</font></td>
      <td><font color="black">&nbsp;Address</font></td>
     
  
    <td colspan="2"><font color="black">&nbsp;Actions</font></td>
  </tr>
<?php
$results=mysqli_query($dbcon,"select * from costumer");
while($row=mysqli_fetch_array($results))
{

?>
<td><?php echo $row['customername']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['address']; ?></td>

 

<td><a href="customeredit.php?id=<?php echo $row['customerid'];?>" >Edit</a></td>
<td><a href="customerdelete.php?id=<?php echo $row['customerid'];?>">Delete</a></td>
</tr>
<?php } ?>
</table>
         <button class="btn btn-primary" id="" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
</body>
</html>
