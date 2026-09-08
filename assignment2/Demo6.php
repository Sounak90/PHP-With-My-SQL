<!DOCTYPE html>
<html>
<body>

<form action="Demo6.php" method="post">

    <label>Enter First Number:</label>
    <input type="number" name="num1"><br><br>

    <label>Enter Second Number:</label>
    <input type="number" name="num2"><br><br>

    <label>Enter Third Number:</label>
    <input type="number" name="num3"><br><br>

    <label>Enter Fourth Number:</label>
    <input type="number" name="num4"><br><br>

    <label>Enter Fifth Number:</label>
    <input type="number" name="num5"><br><br><br>

    <label>Enter Searching Number:</label>
    <input type="number" name="search"><br><br>

    <input type="submit" value="Check">

</form>

<?php
$arr = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5']);
$num = $_POST['search'];

if (in_array($num, $arr)) {
    echo "Present";
} else {
    echo "Not Present";
}
?>

</body>
</html>