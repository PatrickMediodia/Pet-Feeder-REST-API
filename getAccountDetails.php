<?php

include_once('connects.php');
include_once('Models.php');

$query_string = "SELECT `username`, `name` FROM account";
$result = mysqli_query($con, $query_string);

if (mysqli_num_rows($result) == 0) {
    echo "No Account";
} else  {
    $row = mysqli_fetch_array($result);
    $account = new Account(
        $row['username'],
        $row['name']
    );
    echo json_encode($account);
}

mysqli_close($con);

?>