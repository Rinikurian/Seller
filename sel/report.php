<?php  include 'db.php' ?>
<link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript">
        function PrintDiv() {
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1200,height=800');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
     <style>
table, td, th {    
    border: 3px solid black;
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
    
            

        

      <div class="row">
            <div class="table-responsive">
              <div id="divToPrint" >
            <?php
				//print_r($_SESSION);
				$invoiceid			= $_GET['id'];
				$sql	=	"Select * from invoice where invoiceid='$invoiceid' ";
                                
				$res	=	mysqli_query($dbcon,$sql) ;
				$row	=	mysqli_fetch_array($res);
				$outbox		=	$row['invoiceid'];
				$ear		=	$row['due'];
				$date		=	$row['date'];
				$test6		=	$row['Item'];
				$test7		=	$row['specification'];
				$test8		=	$row['cost'];
				$test9		=	$row['price'];
				$test10		=	$row['qty'];
				$test11		=	$row['subtotal'];
				$uid		=	$row['total'];
                               
                                $paid		=	$row['paid'];
                                $balancedue		=	$row['balancedue'];
				//$cal		=	$test7+$test8+$test9;
				//$final		=	$cal/3;

//				$_SESSION['final']	=	$final;
//
//				$sql1	=	"Select * from tbl_registration where id='$uid' order by id desc";
//				$res1	=	mysqli_query($con,$sql1);
//				$row1	=	mysqli_fetch_array($res1);
//
//				$name		=	$row1['name'];
//				$age		=	$row1['age'];
//				$email		=	$row1['email'];
//				$case		=	$row1['case_history'];
//				$date		=	date("Y-m-d");
//				echo $name;
			?>
            	<form name="form1" action="#" method="post">
                <table  style="font-size:20px; position:absolute;top:150px;left:300px; width: auto; padding:5px;border:10px solid black; " cellpadding="0" cellspacing="0"align="center">
                   <tr>
                       <td height="44" colspan="2" align="center"><font  color="red" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbspTECH SOLUTIONS</b></font></td>
                  </tr>
                    <tr>
                    	<td height="45"  colspan="2" align="center" style="border-bottom:1px solid #CCCCCC;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspINVOICE REPORT</td>
                   </tr>
                       	 <tr>
                    	<td width="648" height="30" style="font-size:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID: <?php echo $invoiceid; ?></td>
       				  <td width="242"  style="font-size:15px;">DATE: <?php echo $date ?></td>
                  	</tr>
                    
<tr>
       	  				<td height="58" colspan="2"  align="center" ><table style=" width:100%">
                <thead>
                  <tr>
                     <!--<th>DUE</th>-->
       
        <th>ITEM</th>
        <th>SPECIFICATION</th>
       
        <!--<th>PRICE</th>-->
        <th>QUANTITY</th>
         <th>COST</th>
        <!--<th>SUBTOTAL</th>-->
        <!--<th>TOTAL</th>-->
        <th >AMOUNT PAID</th>
        <!--<th>BALANCEDUE</th>-->
        
                  </tr>
                </thead>
              
               
       
                 
            <tr>
                    
                    <!--<td><?php echo $row['due']; ?></td>-->
                    
                    <td><?php echo $row['Item']; ?></td>
                    <td><?php echo $row['specification'];  ?></td>
                    
                    <!--<td><?php echo $row['price'];  ?></td>-->
                    <td><?php echo $row['cost'];  ?></td>

                     <td><?php echo $row['qty'];  ?></td>
                    <!--<td><?php echo $row['subtotal'];  ?></td>-->
                    <!--<td><?php echo $row['total'];  ?></td>-->
                    <td><?php echo $row['paid'];  ?></td>
                     <!--<td><?php echo $row['balancedue'];  ?></td>-->
                  
       	  	  	  </tr>
                                <tr>
</td>
       	  	  	  </tr> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</td>
       	  	  	  </tr>

       
              </table>
              
         </div>
            <input type="button" value="print" onclick="PrintDiv();" class="btn" style="margin-left:30px; margin-top:20px; float:left;" />
            </div>  
            
                
</tr>
<a href="astaff_home.php"><img src="images/back.png" height="80"</a>
            
            

           
           
            </form>

<!--            </div>-->

<!--        </div> /.row -->

<!--      </div> /#page-wrapper 

    </div> /#wrapper -->
    
    

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>


  </body> 
  
  
</html>
