<?php
$message = "";
if (isset($_POST['submit'])) {
    $arr['name'] = $_POST['name'];
    $arr['email'] = $_POST['email'];
    $url = "https://emptycoder.com/api/add_user_process.php";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);
    $message = $result['data'];

    // echo "<br>";
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>API Test</title>
</head>

<body>
    <h5>Test api with CURD!</h5>
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h6><?php echo $message; ?></h6>
            <form action="" method="POST">
                <fieldset>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Name</label>
                        <input name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="row justify-content-md-end mt-4">
                        <input type="submit" name="submit" value="submit">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>