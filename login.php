<?php

include_once('connects.php');

$username = $_GET['username'];
$password = $_GET['password'];
	
$query_string = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($con, $query_string);

if(!$row = mysqli_fetch_assoc($result)) {
    echo "Incorrect Credentials";
} else  {
	echo "Logged in";	
}

mysqli_close($con);

?>