<!DOCTYPE html>
<html>
<body>
<form action="demo9.php" method="post">
    <label>Enter Your Email:</label>
    <input type="text" name="email"></input><br>
    <input type="submit" value="Check"/>
</form>

<?php
$email = $_POST["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email address.";
    } else {
        echo "Invalid email address.";
    }

?>
</body>
</html>