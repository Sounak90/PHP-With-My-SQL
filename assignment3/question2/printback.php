<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

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
$confirm_password = $_POST["confirm_password"];
$terms = isset($_POST["terms"]) ? $_POST["terms"] : "";

$sql = "INSERT INTO users (username, email, gender, mobile, country, password, confirm_password, terms) VALUES
('$username', '$email', '$gender', '$mobile', '$country', '$password', '$confirm_password', '$terms')";

if ($con->query($sql) === TRUE) {
    echo "<h2>Registration Successful</h2>";
    echo "Username: " . $username . "<br><br>";
    echo "Email Address: " . $email . "<br><br>";
    echo "Gender: " . $gender . "<br><br>";
    echo "Mobile No: " . $mobile . "<br><br>";
    echo "Country: " . $country . "<br><br>";
} else {
    echo "Error: " . $con->error;
}

$con->close();

?>