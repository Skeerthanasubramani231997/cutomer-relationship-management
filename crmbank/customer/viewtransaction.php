<?php
	session_start();
	include("../includes/header/customerHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$customer_id = checkCustomerValidation();
	$valueToSearch = $_SESSION["customer_id"];
	
?>

<article> 	
	
	<form action = "" enctype="multipart/form-data" method = "POST" align = "center">
		<!--<input type = "text" name = "valueToSearch"> <input type = "submit" name = "search" value = "search">
		<div class="container" style="width:1200px;">  -->	
               
                <div class="table-responsive">  
                     <table class="table table-bordered" style="border-radius:10px;">  
                          <tr>  
						   <b><h3 align="center" > View Transaction</h3></b>  
                                  <th width="25%" style="background-color: #438D80;color:white">Transaction Id </th>  
                                <th width="25%" style="background-color: #438D80;color:white"> Transaction Type</th> 
	            <th width="25%" style="background-color: #438D80;color:white"> Amount </th>
	           <th width="25%" style="background-color: #438D80;color:white"> Date</th>
	           <th width="25%" style="background-color: #438D80;color:white"> Account Number</th>
	           
                          </tr>  
                     <?php  
                     echo transactionFetchview($valueToSearch);  
                     ?>  
                     </table>  
                     <br />  
                      
                </div>  
           </div>
	</form>


</article>



