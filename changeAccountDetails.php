<?php

include_once('connects.php');
include_once('Models.php');

$username = $_GET['username'];
$name = $_GET['name'];

$query_string = "UPDATE `account` SET `username` = '$username', `name` = '$name'";
$result = mysqli_query($con, $query_string);

if($result) {
    echo "Updated Account Details";
} else {
    echo "Error";
}

mysqli_close($con);

?>