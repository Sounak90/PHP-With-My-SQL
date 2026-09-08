<!DOCTYPE html>
<html>
<body>
<form action="Demo2.php" method="post">
    <label>Enter First Number:</label>
    <input type="number" name="num1"><br><br>
    <label>Enter Second Number:</label>
    <input type="number" name="num2"><br><br>
    <input type="submit" value="Check">
</form>

<?php
$a = $_POST["num1"];
$b = $_POST["num2"];

if ($a == $b) {
    echo 0;
} elseif (abs(100 - $a) < abs(100 - $b)) {
    echo $a;
} else {
    echo $b;
}
?>
</body>
</html>