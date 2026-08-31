<!DOCTYPE html>
<html>
<body>
<form action="demo14.php" method="post">
    <label>Enter Radius: </label>
    <input type="number" name="radius"><br>
    <input type="submit" value="Calculate">
</form>

<?php
    $radius = $_POST["radius"];
    $circumference = 2 * pi() * $radius;
    $area = pi() * $radius * $radius;

    echo "Circumference: $circumference <br>";
    echo "Area: $area";
?>
</body>
</html>