<?php

include_once('connects.php');
include_once('Models.php');

$serving = $_GET['serving'];
$dispenseTime = $_GET['dispenseTime'];

$query_string = "INSERT INTO dispenseslots(dispenseTime,serving) VALUES ('$dispenseTime','$serving')";
$result = mysqli_query($con, $query_string);

if($result) {
    echo "Dispense Slot Added";
} else {
    echo "Error";
}

mysqli_close($con);

?>