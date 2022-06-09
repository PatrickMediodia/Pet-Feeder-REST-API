<?php

include_once('connects.php');
include_once('Models.php');

$old_password = $_GET['oldPassword'];
$new_password = $_GET['newPassword'];

$query_string = "SELECT `password` FROM account";
$result = mysqli_query($con, $query_string);
$row = $result->fetch_assoc();

if($new_password == "") 
    echo "New password must not be empty";
    
else if ($old_password != $row['password']) 
    echo "Wrong old password";

else if ($old_password == $new_password) 
    echo "New password must be different from old password";
    
else {
    $query_string = "UPDATE account SET `password` = '$new_password'";
    $result = mysqli_query($con, $query_string);
    
    if($result) {
        echo "Account Password Updated";
    } else {
        echo "Error";
    }
}

mysqli_close($con);

?>