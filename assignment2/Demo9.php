<!DOCTYPE html>
<html>
<body>

<form action="Demo9.php" method="post">

    <label>Enter Long String:</label>
    <input type="text" name="long"><br><br>

    <label>Enter Short String:</label>
    <input type="text" name="short"><br><br>

    <input type="submit" value="Create String">

</form>

<?php
$long = $_POST['long'];
$short = $_POST['short'];

$result = $long . " " . $short . " " . $long;

echo $result;
?>

</body>
</html>