<!DOCTYPE html>
<html>
<body>

<form action="Demo10.php" method="post">

    <label>Enter First Number:</label>
    <input type="number" name="num1"><br><br>

    <label>Enter Second Number:</label>
    <input type="number" name="num2"><br><br>

    <label>Enter Third Number:</label>
    <input type="number" name="num3"><br><br>

    <label>Enter Fourth Number:</label>
    <input type="number" name="num4"><br><br>

    <input type="submit" value="Rotate">

</form>

<?php
$arr = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4']);

$first = array_shift($arr);
$arr[] = $first;

echo "[" . implode(", ", $arr) . "]";
?>

</body>
</html>