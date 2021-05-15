<?php
	session_start();
	include("../includes/header/customerLoginHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$flag = true;
	if (isset ($_POST['submit'])) {
		$customer_id= $_POST['customer_id'];
		$email = $_POST['email'];
		$flag = CustomerLoginCheck($customer_id, $email);
		if ($flag) {
			$_SESSION["customer_id"] = $customer_id;
			header('Location: viewcustomer.php');
		}
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
 	
	<h1 align = "center">  Customer Login </h1>
	<form action = "" method = "POST" align = "center">
		<table align = "center">
		<?php 

			if ($flag == false) {
				echo "User Not Exist";
			}
		?>
			
			<tr>
				<td> Customer Id				</td>
				<td> <input type = "text" name = "customer_id"  placeholder="customer id"required>				</td>
			</tr>
			
			<tr>
				<td> Email			</td>
				<td> <input type = "text" name = "email" placeholder="email" required>				</td>
			</tr>
			
			
			
			<tr>
				<td> 				</td>
				<td> <input type = "submit" name = "submit" value = "submit">
					 <input type = "reset" name = "reset" value = "reset">
				</td>
			</tr>
			
		</table>
	</form>
<div  style="padding-left: 70px; padding-top: 70px; ">

</div>
</article>



