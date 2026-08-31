<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label>Input Radius: </label>
        <input type="text" name="radius" ></input> </br>
        <input type="submit" value="Submit"/> </br>
    </form>
    
</body>
</html>

<?php

    $r = $_POST["radius"];
   $circum =2*pi()*$r;
   $area = pi()*pow($r,2);
   $circum=round($circum,2);
   $area=round($area,2);

  // $r = pi();

    echo "The circumference of the circle: $circum";
    echo "<br>";
    echo "The area of circle: $area";

?>