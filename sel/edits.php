<!DOCTYPE html>
<?php
include 'db.php';
session_start();
if(isset($_POST['update']))
  {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
   $address=$_POST['address'];
  
  $updated=mysql_query("UPDATE staff SET 
        staffname='$name', email='$email', mobile='$mobile', address='$address', WHERE id='$staffid'")
or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:index.php');
  }
}
 
ob_end_flush();
?>
<html>
<head>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <title>Angular Custom Table Edit</title>
        <style>
      #mytable input{
          width:100%;
        }
</style>
</head>
<body >
 
      <h1 align="center" style="color:#428bca">Custom Table Edit </h1>

<div class="container">
     <div class="row">
   
            <div class="col-md-12">

                <div class="table-responsive">
                  <form  id="empform"  ng-submit="submitEmployee()">
                    <table id="mytable" class="table table-bordered">

                        <thead>
                        
                        
                        <th style="width:10%;"> Name</th>
                        <th style="width:15%;">Email</th>
                        <th style="width:10%;">Mobile</th>
                        <th style="width:15%;">Address</th>
            <th style="width:15%;">Actions</th>
                               
                        </thead>

                        <tbody>
                 
              <tr ng-repeat="emp in empoyees">
               
               
                <td>
                   <input name="Name" name="Name"  ng-disabled="!enabledEdit[{{$index}}]"/>
                </td>
                <td>
                   
                     <input name="email" name="email"  ng-disabled="!enabledEdit[{{$index}}]" />
                 </td>
                <td>
                   <input name="mobile" name="mobile"  ng-disabled="!enabledEdit[{{$index}}]"
                </td>
                <td>
                  <input name="address" name="address"  ng-disabled="!enabledEdit[{{$index}}]"/>
                </td>
                <td >
                  <div class="buttons">
                    <button class="btn btn-primary" ng-click="editEmployee($index)">Edit</button>
                    <button class="btn btn-danger" ng-click="deleteEmployee($index)">Delete</button>
                  </div>  
                </td>
              </tr>
              
                        </tbody>

                    </table>
                      <input type="submit" class="btn btn-primary" value="Submit" />
                   </form>
                    <div class="clearfix"></div>
                 </div>

            </div>
  
  </div>
 
</body>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
   
</html>