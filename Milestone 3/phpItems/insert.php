<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$host = "localhost";
		$user = "cen4010_su21_g03@fau.edu";
		$password = "o9CSuM3O+g";
		$db = "cen4010_su21_g03";
		
		$dbhandle = mysqli_connect($host, $user, $password, $db);
		
		// Check connection
		if($dbhandle === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        $ID = '';
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO signup VALUES ('$ID', '$fname',
			'$lname','$email','$username','$password')";
		
		if(mysqli_query($dbhandle, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$fname\n $lname\n "
				. "$email\n $username\n $password");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($dbhandle);
		}
		
		// Close connection
		mysqli_close($dbhandle);
		?>
	</center>
</body>

</html>
