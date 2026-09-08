<!DOCTYPE html>
<html>
<body>
<form action="Demo5.php" method="post">
    <label>Enter The Text That Containes 'aaa':</label>
    <input type="text" name="text"><br><br>
    <input type="submit" value="Check">
</form>

<?php
$str = $_POST["text"];
$count = 0;

for ($i = 0; $i < strlen($str) - 1; $i++) {
    if ($str[$i] == 'a' && $str[$i + 1] == 'a') {
        $count++;
    }
}

echo $count;
?>