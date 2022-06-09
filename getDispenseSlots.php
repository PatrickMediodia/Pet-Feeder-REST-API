<?php

include_once('connects.php');
include_once('Models.php');

$query_string = "SELECT * FROM dispenseslots ORDER BY `dispenseTime` DESC";
$result = mysqli_query($con, $query_string);

if (mysqli_num_rows($result) == 0) {
    echo "No slots found";
} else {
    $dispenseSlots = [];
    while($row = mysqli_fetch_array($result)) {
        $dispenseSlot = new DispenseSlots(
            $row['dispenseTime'],
            $row['serving'],
        );
        array_push($dispenseSlots, $dispenseSlot);
    }
    echo json_encode($dispenseSlots);
}

mysqli_close($con);

?>