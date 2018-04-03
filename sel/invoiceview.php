<!doctype html>
<html>
<body>

<div>
 

 <?php
 include("db.php");
 ?><html>
        <head>
    <title>INVOICE DETAILS</title>
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
                <center> Invoice details</center>
            </h2>
        </div>
      <table border="5" style="background-color: white; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>ID</th>
          <th>DUE</th>
        <th>DATE</th>
        <th>ITEM</th>
        <th>SPECIFICATION</th>
        <th>COST</th>
        <th>PRICE</th>
        <th>QTY</th>
        <th>SUBTOTAL</th>
        <th>TOTAL</th>
        <th>PAID</th>
        <th>BALANCEDUE</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        $sql="SELECT * FROM invoice";
        $result=mysqli_query($dbcon,$sql);
        $i=0;
        while($row=mysqli_fetch_array($result))
                {
                    echo
            "<tr>
               
             <td>{$row['invoiceid']}</td>
                  <td>{$row['due']}</td>
                      <td>{$row['date']}</td>
              <td>{$row['Item']}</td>
                  <td>{$row['specification']}</td>
                      <td>{$row['cost']}</td>
                          <td>{$row['price']}</td>
                              <td>{$row['qty']}</td>
                                  <td>{$row['subtotal']}</td>
                                      <td>{$row['total']}</td>
                                          <td>{$row['paid']}</td>
                                              <td>{$row['balancedue']}</td>
                                                  
                                                  
                                                  
              
              
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
                <button class="btn btn-primary" id="btn_Product_reg" onclick="location.href = 'astaff_home.php';" style="float: right;">Back</button>

    
    </body>
    </html