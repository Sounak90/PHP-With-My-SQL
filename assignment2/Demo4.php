<!DOCTYPE html>
<html>
<body>
<form action="Demo4.php" method="post">
    <label>Enter The Text:</label>
    <input type="text" name="text"><br><br>
    <input type="submit" value="Check">
</form>

<?php
$str = $_POST["text"];

if (strlen($str) < 3) {
    echo strtoupper($str);
} else {
    echo substr($str, 0, -3) . strtoupper(substr($str, -3));
}
?>