
<?php
include_once 'db.php';

?>

<?php
if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass =sha1( $_POST['pass']);

    $dbcon = mysqli_connect("localhost", "root", "", "seller") or die("error in connection");
    $res = "select * from staff where email='$uname' and password='$pass' ";
    $row = mysqli_query($dbcon,$res);
//    mysqli_query( 

    if ($row) {
        
        
        if($fetch=mysqli_fetch_array($row))
	{
		if($fetch['roleid']==1)   
		{

//                   $_SESSION["staffid"] = $row['staffid'];
//        $_SESSION["staffname"] = $row['staffname'];
//			$_SESSION["name"]=$fetch['name'];
			$_SESSION["staffid"]=$fetch['staffid'];
			$_SESSION["uname"]=$uname;	// setting username as session variable 
//	$_SESSION["uname"]=$username;	// setting username as session variable 
//		$_SESSION["staffid"]=$fetch['staffid'];
                        
                        
                    
                    header("location:astaff_home.php");	//home page or the dashboard page to be redirected
	}
	elseif($fetch['roleid']==2)   
		{
		$_SESSION["uname"]=$uname;	// setting username as session variable 
		$_SESSION["staffid"]=$fetch['staffid'];
	header("location:staff_home.php");
	}
      
	}
        
        
        

        
         //$recaptcha_secret = "6LcQ60AUAAAAAK8yoXsiGbTI-DcTAQHcnLemq7SH";
       // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        //$response = json_decode($response, true);
//        if($response["success"] === true)
//        {
	 

     }
     else {
        ?>
        <script>
            alert("invalid user");
        </script>
        <?php
}}
//}
?>



<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/rrr.png" >
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in </h1>
            <div class="account-wall">
                <img class="profile-img" src="images/demo/backgrounds/download.png" 
                     alt="">
                <form class="form-signin" method="post" action="">
                    <input type="text" name="uname" id="uname" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    <div class="g-recaptcha" data-sitekey="6LcQ60AUAAAAAKhsFmBY0xFLS9rpU6S820XoTqzn"></div>
                    <input type="submit" class="btn btn-lg btn-primary btn-block" name="login" id="login" value="Log In">
                    <!--<label class="checkbox pull-left">-->
                        <!--<input type="checkbox" value="remember-me">-->
                        <!--Remember me-->
                    <!--</label>-->
                    <!--<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>-->
                </form>
            </div>
            <a href="bill_staff_registration_1.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>

