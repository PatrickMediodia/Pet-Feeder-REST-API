<?php

include_once('connects.php');
include_once('Models.php');

$query_string = "SELECT * FROM dispenselogs ORDER BY `time` DESC";
$result = mysqli_query($con, $query_string);

if (mysqli_num_rows($result) == 0) {
    echo "No logs found";
} else {
    $dispenseLogs = [];
    while($row = mysqli_fetch_array($result)) {
        $dispenseLog = new DispenseLogs(
            $row['time'],
            $row['temperature'],
            $row['humidity'],
            $row['serving'],
            $row['mode']
        );
        array_push($dispenseLogs, $dispenseLog);
    }
    echo json_encode($dispenseLogs);
}

mysqli_close($con);

?>