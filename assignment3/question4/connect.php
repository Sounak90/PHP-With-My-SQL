<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="connect.php" method="post">
    <div class="container">
    <div class="form-group">
        <label>Username: </label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group">
        <label>Email Address: </label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label>Gender: </label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male">
            <label class="form-check-label">Male</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Female">
            <label class="form-check-label">Female</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Others">
            <label class="form-check-label">Others</label>
        </div>
    </div>

    <div class="form-group">
        <label>Mobile:</label>
        <input type="text" class="form-control" name="mobile">
    </div>

    <div class="form-group">
        <label>Country:</label>
        <select class="form-control" name="country">
            <option value="">-- Select Country --</option>
            <option value="India"> India </option>
            <option value="USA"> USA </option>
            <option value="UK"> UK </option>
            <option value="Canada"> Canada </option>
            <option value="Australia"> Australia </option>
        </select>
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    
    <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysitedb";

    $con = new mysqli($hostname, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $mobile = $_POST["mobile"];
    $country = $_POST["country"];
    $password = $_POST["password"];

    $sql = "INSERT INTO registration (username, email, gender, mobile, country, password) VALUES
    ('$username', '$email', '$gender', '$mobile', '$country', '$password')";

    if ($con->query($sql) === TRUE) {
        echo "Connection successful";
    } else {
        echo "Error: " . $con->error;
    }
    $con->close();
}
?>
</body>
</html>