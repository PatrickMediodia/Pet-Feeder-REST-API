<?php

include_once('connects.php');
include_once('Models.php');

$query_string = "UPDATE dispense SET dispenseCondition = True, lastDispense = CURRENT_TIMESTAMP()";
$result = mysqli_query($con, $query_string);

if($result) {
    echo "Food Dispensed";
} else {
    echo "Error";
}

mysqli_close($con);

?>