<!DOCTYPE html>
<html>
<body>

<h2>User Registration</h2>

<form action="demo17.php" method="post">

    <label>Full Name: </label>
    <input type="text" name="name">
    <br><br>

    <label>Date of Birth: </label>
    <input type="date" name="dob">
    <br><br>

    <label>Email: </label>
    <input type="text" name="email">
    <br><br>

    <label>Mobile: </label>
    <input type="text" name="mobile">
    <br><br>

    <input type="checkbox" name="terms">
    I agree to the terms and conditions
    <br><br>

    <input type="submit" value="Register">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    $valid = true;

    if (count(explode(" ", trim($name))) < 2) {
        echo "Full name must contain two words.<br>";
        $valid = false;
    }

    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;

    if ($age < 18) {
        echo "You must be above 18 years old.<br>";
        $valid = false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.<br>";
        $valid = false;
    }

    if (!preg_match("/^[0-9]{10}$/", $mobile)) {
        echo "Mobile number must contain 10 digits.<br>";
        $valid = false;
    }

    if (!isset($_POST["terms"])) {
        echo "You must agree to the terms and conditions.<br>";
        $valid = false;
    }

    if ($valid == true) {
        echo "Successful registration";
    }

}
?>
</body>
</html>