<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$con = new mysqli($hostname, $username, $password, $dbname);

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = $con->execute_query($sql);

if ($result->num_rows > 0) {
    header("Location: welcome.php");
    exit();
} else {
    echo "<h2>Username not found</h2>";
    echo '<a href="login.html">Go Back</a>';
}

?>