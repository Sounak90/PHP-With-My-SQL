<!DOCTYPE html>
<html>
<body>
<form action="demo2.php" method="post">
    <label>Enter Your Name:</label>
    <input type="text" name="username"><br>
    <input type="submit" value="Submit">
</form>

<?php
    $name = $_POST["username"];
    echo "Your name is: $name";
?>
</body>
</html>