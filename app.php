<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $dept = $_POST['dept'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $gname = $_POST['gname'];
    $gphone = $_POST['gphone'];
    $addr = $_POST['addr'];
    $other = $_POST['other'];

    $sql = "INSERT INTO `trip`.`tinttrip` (`name`, `roll`, `dept`, `phone`, `email`, `gender`, `gname`, `gphone`, `addr`, `other`, `dt`) VALUES ('$name', '$roll', '$dept', '$phone', '$email', '$gender', '$gname', '$gphone', '$addr', '$other', current_timestamp());";

    // Execute the query
    if($con->query($sql) == true){
        // Successfully inserted
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TINTrek - Apply Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./static/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=REM:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <img src="./images/bgimage.jpg" alt="college" class="bgimg">
    <div class="container">
        <div class="container alert-container">
            <?php 
                if($insert == true){
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Success!</strong> Form submitted Successfully.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }else{
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Huury Up!</strong> Fillup your form before <strong>25th August, 2023</strong>.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }
            ?>
        </div>
        <h1>Sandakaphu Trek form fillup</h1>
        <p>Submit your details to participate in this trek before <strong>25th August, 2023</strong></p>
        <form action="./app.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="number" name="roll" id="roll" placeholder="Enter your roll no.">
            <input type="text" name="dept" id="dept" placeholder="Enter your department name">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no.">
            <input type="email" name="email" id="email" placeholder="Enter your email id">
            <select name="gender" id="gender">
                <option selected>Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input type="text" name="gname" id="gname" placeholder="Enter your guardian name">
            <input type="phone" name="gphone" id="gphone" placeholder="Enter your guardian's phone no.">
            <input type="text" name="addr" id="addr" placeholder="Enter your address">
            <textarea name="other" id="" cols="30" rows="10" placeholder="Enter your desscription ..."></textarea>
            <div class="btns">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous">
    </script>
</body>

</html>