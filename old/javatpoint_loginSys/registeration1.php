<!DOCTYPE html>
<html>

<head>
	<title>Insert data</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "javatpoint");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO login VALUES ('$username','$password')";
		

		if(mysqli_query($conn, $sql)){
			header("location: log.php");
			echo "<h3>Your account was successfully created!</h3>";
			?>
			
			<?php

			echo nl2br("\n$username\n $password\n");
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
