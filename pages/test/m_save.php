<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

    include '../../conn.php';

	for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
		if(isset($_POST["txtCustomerID$i"]))
		{
			if($_POST["txtCustomerID$i"] != "" && 
					$_POST["txtName$i"] != "" &&
					$_POST["txtEmail$i"] != "" &&
					$_POST["txtCountryCode$i"] != "" &&
					$_POST["txtBudget$i"] != "" &&
					$_POST["txtUsed$i"] != "")
			{
				$sql = "INSERT INTO customer (CustomerID, Name, Email, CountryCode, Budget, Used) 
					VALUES ('".$_POST["txtCustomerID$i"]."','".$_POST["txtName$i"]."','".$_POST["txtEmail$i"]."'
					,'".$_POST["txtCountryCode$i"]."','".$_POST["txtBudget$i"]."','".$_POST["txtUsed$i"]."')";
				$query = mysqli_query($con,$sql);
			}
		}
	}

	echo "Record add successfully";
	mysqli_close($con);
?>
</body>
</html>