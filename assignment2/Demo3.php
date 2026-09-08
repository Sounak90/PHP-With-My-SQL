<!DOCTYPE html>
<html>
<body>
<form action="Demo3.php" method="post">
    <label>Enter First Number:</label>
    <input type="number" name="num1"><br><br>
    <label>Enter Second Number:</label>
    <input type="number" name="num2"><br><br>
    <input type="submit" value="Check">
</form>

<?php
$a = $_POST["num1"];
$b = $_POST["num2"];

if (($a >= 40 && $a <= 50 && $b >= 40 && $b <= 50) ||
    ($a >= 50 && $a <= 60 && $b >= 50 && $b <= 60)) {
    echo "true";
} else {
    echo "false";
}
?>