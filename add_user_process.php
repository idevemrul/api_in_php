<?php
include('config.php');
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $hasData = mysqli_query($con, "SELECT * FROM `users` WHERE user_email='$email';");
    $count = mysqli_num_rows($hasData);

    if ($count > 0) {
        $data = "This user already exixs";
        $status = 'true';
        $code = 0;
    } else {
        $query = "INSERT INTO users (user_name,user_email) VALUES('" . $name . "','" . $email . "')";
        if (mysqli_query($con, $query)) {
            $last_id = $con->insert_id;
            $data = "data Inserted successfully on ID =" . $last_id;
            $status = 'true';
            $code = 1;
        } else {
            $data = "Failed";
            $status = 'true';
            $code = 2;
        }
    }
}
echo json_encode(["status" => $status, "data" => $data, "code" => $code]);
