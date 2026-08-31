<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $dob = $_POST["dob"];
    $email = trim($_POST["email"]);
    $mobile = trim($_POST["mobile"]);

    // Full name must contain exactly two words
    $nameParts = preg_split('/\s+/', $name);

    // Calculate age
    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;

    // Validation
    if (count($nameParts) != 2) {
        $message = "Error: Full name must contain exactly two words.";
    }
    elseif ($age < 18) {
        $message = "Error: You must be above 18 years old.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Error: Please enter a valid email ID.";
    }
    elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $message = "Error: Mobile number must contain exactly 10 digits.";
    }
    elseif (!isset($_POST["terms"])) {
        $message = "Error: You must agree to the terms and conditions.";
    }
    else {
        $message = "Successful Registration";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>

<body>

<h2>User Registration Form</h2>

<form method="post" action="">

    <label>Full Name:</label>
    <input type="text" name="name" required>
    <br><br>

    <label>Date of Birth:</label>
    <input type="date" name="dob" required>
    <br><br>

    <label>Email ID:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Mobile:</label>
    <input type="text" name="mobile" maxlength="10" required>
    <br><br>

    <input type="checkbox" name="terms">
    <label>I agree to the Terms and Conditions</label>
    <br><br>

    <input type="submit" value="Register">

</form>

<?php
if ($message != "") {
    echo "<h3>$message</h3>";
}
?>

</body>
</html>