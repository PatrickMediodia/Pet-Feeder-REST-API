<?php

include_once('connects.php');
include_once('Models.php');

$dispenseTime = $_GET['dispenseTime'];

$query_string = "DELETE FROM dispenseslots WHERE dispenseTime = '$dispenseTime';";
$result = mysqli_query($con, $query_string);

if($result) {
    echo "Dispense Slot Deleted";
} else {
    echo "Error";
}

mysqli_close($con);

?>