<?php

include_once('connects.php');
include_once('Models.php');

$old_password = $_GET['oldPassword'];
$new_password = $_GET['newPassword'];

$query_string = "UPDATE account SET `password` = '$new_password'";
$result = mysqli_query($con, $query_string);

if($result) {
    echo "Account Password Updated";
} else {
    echo "Error";
}

mysqli_close($con);

?>