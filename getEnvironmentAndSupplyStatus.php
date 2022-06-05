<?php

include_once('connects.php');
include_once('Models.php');

$query_string = "SELECT * FROM foodwaterstatus, temperaturehumiditystatus";
$result = mysqli_query($con, $query_string);

$row = $result->fetch_assoc();

$record = new EnvironmentAndSupply(
    $row['temperature'],
    $row['humidity'],
    $row['foodLevel'],
    $row['waterLevel'],
    $row['timestamp']
);

echo json_encode($record);

mysqli_close($con);

?>