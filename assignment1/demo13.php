<!DOCTYPE html>
<html>
<body>
<form action="demo13.php" method="post">
    <label>Enter Number:</label>
    <input type="number" name="number"><br>
    <input type="submit" value="Check">
</form>

<?php
    $num = $_POST["number"];

    if ($num % 2 == 0) {
        echo "$num is Even.";
    } else {
        echo "$num is Odd.";
    }
?>
</body>
</html>