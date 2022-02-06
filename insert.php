

<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
        require_once 'key.php';
		
		//create table to receive data on your machine in your data.
		//CREATE TABLE classroom(
//	name VARCHAR(255) NOT NULL
//);
		
		$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_database );
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 3 values from the form data(input)
		$name = $_REQUEST['name'];
		
		// Performing insert query execution
		// here our table name is classroom
		$sql = "INSERT INTO classroom VALUES ('$name')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Hello $name You have been Registered, wait for Comfirmation";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>