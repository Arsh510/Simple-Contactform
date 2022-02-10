<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if (!$conn) {
        die("connection failed due to " .$mysqli_connect_error());
    }
    // echo("Connection Sucessfully");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactnumber = $_POST['contactnumber'];

    $sql = "INSERT INTO `applicationdata`.`applicationdata` (`name`, `email`, `contactnumber`) VALUES ('$name', '$email', '$contactnumber')";

    // echo($sql);

    if ($conn->query($sql) == TRUE) {
        // echo("Inserterd Sucessfully");
    }
    else{
        echo("ERROR: $sql <br> $conn->error");
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="container">
        <h1>Application Form</h1>
        <form action="apply.php" method="post">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Your Email" id="">
            </div>
            <div class="form-group">
                <input type="number" name="contactnumber" id="contactnumber" placeholder="Contact Number">
            </div>
            <button class="btn">SUBMIT</button>
        </form>
    </div>
</body>

</html>