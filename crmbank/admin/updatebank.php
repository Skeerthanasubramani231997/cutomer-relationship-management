<?php
	session_start();
	include("../includes/header/adminHeader.php");
	include("../includes/database/dbconnect.php");
	include("../includes/function/function.php");
	
	$admin_id= checkAdminValidation();
	$flag = false;
	$globalname = "";
	$gobaldob= "";
	$bank_id=$_GET["bank_id"];
	if ($bank_id == "") {
		header('Location: bank.php');
	}
	if (isset($_POST["submit"])) 
		{
		$bank_id = $_POST["bank_id"];
		$iban_no=$_POST["iban_no"];
		$bank_name = $_POST["bank_name"];
		updateBank($bank_id,$iban_no,$bank_name);
				}  
    global $con;  
    $sql = "SELECT * FROM bank WHERE bank_id = '$bank_id' ";  
    $result = mysqli_query($con, $sql);  
    while($row = mysqli_fetch_array($result)) {    
		$globalbank_id = $row["bank_id"];
		$globaliban_no = $row["iban_no"];
		$gobalbank_name= $row["bank_name"];
	
?>

<article> 	
	
	<form action = "" enctype="multipart/form-data" method = "POST" align = "center">
		<table align = "center">
		<?php 
			if ($flag == true) {
				echo "Bank already exit";
			}
		?><tr>
				<td> Bank Id				</td>
				<td> <input type = "text" name = "bank_id" value = "<?php echo $row["bank_id"]; ?>" required>				</td>
			</tr>

			<tr>
				<td> IBAN No				</td>
				<td> <input type = "text" name = "iban_no" value = "<?php echo $row["iban_no"]; ?>" required>				</td>
			</tr>

			<tr>
				<td> Bank Name				</td>
				<td> <input type = "text" name = "bank_name" value = "<?php echo $row["bank_name"]; ?>" required>				</td>
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

<?php  } ?>



