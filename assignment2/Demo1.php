<!DOCTYPE html>
<html>
<body>
<form action="Demo1.php" method="post">
    <label>Enter First Number:</label>
    <input type="number" name="num1"><br><br>
    <label>Enter Second Number:</label>
    <input type="number" name="num2"><br><br>
    <label>Enter Third Number:</label>
    <input type="number" name="num3"><br><br>
    <input type="submit" value="Check">
</form>

<?php
$a = $_POST["num1"];
$b = $_POST["num2"];
$c = $_POST["num3"];

$result = (($a >= 20 && $a <= 50) ||
           ($b >= 20 && $b <= 50) ||
           ($c >= 20 && $c <= 50));

echo $result ? "true" : "false";
?>
</body>
</html>