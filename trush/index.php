<?php
include("config.php");
header('Content-Type:application/json');
$query = "SELECT * FROM users";

$res = mysqli_query($con, $query);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $arr[] = $row;
    }
    echo json_encode(['status' => true, 'data' => $arr, 'result' => 'found']);
}
