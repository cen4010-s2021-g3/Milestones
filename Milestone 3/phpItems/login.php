<?php

$host = "localhost";
$user = "cen4010_su21_g03@fau.edu";
$password = "o9CSuM3O+g";
$db = "cen4010_su21_g03";

$dbhandle = mysqli_connect($host, $user, $password, $db);


if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from signup where username = '".$username."' AND password = '".$password."' limit 1";

	$result = mysqli_query($dbhandle, $sql);

	if(mysqli_fetch_object($result)==true){
		echo "logged in";
		exit();
	}
	else{
        
		echo "wrong";
		exit();
	}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Group 3 Milestone 3 Vertical Prototype</title>
		<style>
			h1 {text-align: center;}
			p {text-align: center;}
			div {text-align: center;}
		</style>
	</head>
    <h1>Log in to Owlpost!</h1>
	<div>
		<form method= "POST" action="signup.php">
			<label for="lname">Username:</label>
			<input type="text" id="username" name="username"><br><br>
			<label for="lname">Password:</label>
			<input type="text" id="password" name="password"><br><br>
			<input type="submit" value="Submit">
		</form>
	</div>
</html>