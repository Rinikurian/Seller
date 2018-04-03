<!doctype html>
<html>
<body>

<div>
 

 <?php
 include("db.php");
 ?>
    <html>
        <head>
    <title>SubCategory Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 60%;
}

th, td {
    padding: 15px;
}
</style>
   
   
</head>
      <div class="jumbotron">
            <h2>
                <center> SubCategory Details</center>
            </h2>
        </div>
      <table border="5" style="background-color: #white; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          
           <th>CATEGORYNAME</th>
          <th>SUBCATEGORYNAME</th>

          
        
          
        </tr>
      </thead>
      <tbody>
        <?php
        $sql="SELECT * FROM subcategory";
        $sql1="SELECT * FROM subcategory,category where  subcategory.categoryid=category.categoryid";
        
        $result=mysqli_query($dbcon,$sql1);
        $i=0;
        while($row=mysqli_fetch_array($result))
                {
                    echo
            "<tr>
             
              <td>{$row['subcategoryname']}</td>
                   <td>{$row['categoryname']}</td>
                  
              
              
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
                 <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'astaff_home.php';" style="float: right;">Back</button>

    
    </body>
    </html