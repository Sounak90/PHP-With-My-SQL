<?php

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
$gender = $_POST["gender"];
$mobile = $_POST["mobile"];
$country = $_POST["country"];
$password = $_POST["password"];

$sql = "INSERT INTO registration (username, email, gender, mobile, country, password) VALUES
('$username', '$email', '$gender', '$mobile', '$country', '$password')";

if ($con->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
} else {
    header("Location: registration.php");
    exit();
}

$con->close();

?>