<!DOCTYPE html>
<?php
include 'conn.php';
session_start();
if(!(isset($_SESSION['id'])))
{
header('location:newloginindex.php');
}
$username=$_SESSION['user_name'];
$tid=$_SESSION['id'];
$rid=$_SESSION['reg_id'];
echo $username;

$sql1="SELECT * FROM `user_reg` WHERE `reg_id`='$rid'";
$result=mysqli_query($con,$sql1);

if(isset($_POST['edit'])){
	$a=$_POST['firstname'];
	$b=$_POST['lastname'];
	$c=$_POST['mob'];
	//echo $c;
	//$sql2="UPDATE `staffreg` set `name`='$a' ,`lname`='$b' ,`contact`='$c'`address`='$d' where staffreg.lid='$tid'";
	$sql2="UPDATE `user_reg` set `firstname`='$a' where user_reg.reg_id='$rid'";
	$result2=mysqli_query($con,$sql2);
	$sql3="UPDATE `user_reg` set`lastname`='$b' where user_reg.reg_id='$rid'";
	$result3=mysqli_query($con,$sql3);
	$sql4="UPDATE `user_reg` set`mob`='$c' where user_reg.reg_id='$rid'";
	$result4=mysqli_query($con,$sql4);
	
}
?>
<html>
<head>
<link rel="stylesheet" href="profile.css">
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  max-height: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color:white;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
 <link href="css/sbootstrap.min.css" rel="stylesheet">
    <link href="css/sfont-awesome.min.css" rel="stylesheet">
    <link href="css/sprettyPhoto.css" rel="stylesheet">
    <link href="css/sprice-range.css" rel="stylesheet">
    <link href="css/sanimate.css" rel="stylesheet">
	<link href="css/smain.css" rel="stylesheet">
	<link href="css/sresponsive.css" rel="stylesheet">
</head>
<body>
<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="homeindex.php">Home</a></li>
								<li class="dropdown"><a href="#">Sales<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="userupload.php">Sell My Phone</a></li>
										<li><a href="product-details.html">View sales</a></li> 
										 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Buy<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                       <li><a href="upload.php">Buy Second Hand</a></li>
										 
                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">account<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Change password</a></li>
										<li><a href="ownerprofileview.php">View Accont</a></li>
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="logout.php">Logout<i class="fa fa-angle-down"></i></a>

                                </li> 
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
<form name="myform" action="ownereditprof.php" method="post">
<?php
$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
  <!--<img src="11.jpg" alt="John" style="width:50%">-->
  <h3><?php echo $username ?></h3>
  <br>
  <p>FirstName:&nbsp&nbsp&nbsp <input type="text" name="firstname" value="<?php echo $row['firstname']?> "> &nbsp&nbsp&nbsp&nbsp&nbspLast Name:<input type="text" name="lastname" value="<?php echo $row['lastname']?>"></p>
  <p></p><br>
  <p>Mobile Name:<input type="text" name="mob" value="<?php echo $row['mob']?>"></p>
 
 <!--
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>-->
  <div style="margin: 24px 0;">
    <!--<a href=""><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> -->
<?php
}
?>	
 </div>
 <div style="background-color:black;">
 <p><input type="submit" name="edit" value="Edit"></p>
</div>
</form>
</div>

</body>
</html>
