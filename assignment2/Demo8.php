<!DOCTYPE html>
<html>
<body>

<form action="Demo8.php" method="post">

    <label>Enter First String:</label>
    <input type="text" name="str"><br><br>

    <label>Enter String to Insert:</label>
    <input type="text" name="insert"><br><br>

    <input type="submit" value="Insert">

</form>

<?php
$str = $_POST['str'];
$insert = $_POST['insert'];

$middle = strlen($str) / 2;

$result = substr($str, 0, $middle) . " " . $insert . " " . substr($str, $middle);

echo $result;
?>

</body>
</html>