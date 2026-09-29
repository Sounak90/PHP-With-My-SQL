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
$password = $_POST["password"];

$sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    header("Location: home.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}

$con->close();

?>