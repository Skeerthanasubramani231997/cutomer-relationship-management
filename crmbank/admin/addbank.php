<?php
	session_start();
	include("../includes/header/adminHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$admin_id= checkAdminValidation();
	
	
	$flag = false;
	if (isset($_POST["submit"])) {
		$iban_no=$_POST["iban_no"];
		$bank_name = $_POST["bank_name"];
		addBank($iban_no, $bank_name);
		}
?>

<article> 	

<style>
input[type=text]{
  width: 100%;
  padding: 6px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=radio]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email]{
  width: 100%;
  padding: 6px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date]{
  width: 100%;
  padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #438D80;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #438D80;
}

input[type=reset] {
  width: 100%;
  background-color: #438D80;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: #438D80;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>

	
	<form action = "" enctype="multipart/form-data" method = "POST" align = "center">
		<table align = "center">
		<?php 
			if ($flag == true) {
				echo "Bank already exit";
			}
		?>

			
			<tr>
				<td> IBAN No				</td>
				<td> <input type = "text" name = "iban_no" required>				</td>
			</tr>
			
			<tr>
				<td> Bank Name			</td>
				<td> <input type = "text" name = "bank_name" required>			</td>
			</tr>
			
						
			<tr>
				<td> 				</td>
				<td> <input type = "submit" name = "submit" value = "submit">
					 <input type = "reset" name = "reset" value = "reset">
				</td>
			</tr>
			
		</table>
	</form>


</article>



