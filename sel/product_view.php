<!doctype html>
<html>
<body>

<div>
 

 <?php
 include("db.php");
 ?>
    <html>
        <head>
    <title>Product Details</title>
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
                <center> Product Details</center>
            </h2>
        </div>
      <table border="5" style="background-color: white; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          
          <th>NAME</th>
          <th>IMAGE</th>
          <th>PRICE</th>
        
          <th>SUBCATEGORY NAME</th>
          <th>CATEGORY NAME</th>
          <th>QUANTITY</th>
            <th>DESCRIPTION</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        $sql="SELECT * FROM product,subcategory,category where product.subcategoryid=subcategory.subcategoryid and subcategory.categoryid=category.categoryid";
        $result=mysqli_query($dbcon,$sql);
        $i=0;
        while($row=mysqli_fetch_array($result))
                {
                    echo
            "<tr>
            
              <td>{$row['productname']}</td>
              <td>{$row['productimage']}</td>
              <td>{$row['price']}</td>
             
                   <td>{$row['subcategoryname']}</td>
              <td>{$row['categoryname']}</td>
                  <td>{$row['quantity']}</td>
                   <td>{$row['description']}</td>
            
              
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
               <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'staff_home.php';" style="float: right;">Back</button>
                <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'mm.php';" style="float: right;">Back to bill</button>

    
    </body>
    </html