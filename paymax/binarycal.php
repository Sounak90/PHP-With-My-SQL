<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="binarycal.php" method="post">
        <label>x : </label>
        
        
        <input type="text" name="x" ></input> </br>
        <label>y : </label>
        <input type="text" name="y" ></input> </br>
        <input type="submit" value="Calculate"/> </br>
    </form>
    
</body>
</html>


<?php
 
 $first = $_POST["x"];
 $second = $_POST["y"];

 $sum = $first + $second;
 $sub =  $first - $second;
 $multi =  $first * $second;
 $div =  $first / $second;
 $rem = $first % $second;

 echo "The sum is $sum";
 echo "<br>";
 echo "The substraction is $sub";
 echo "<br>";
 echo "The Multiplication is $multi";
 echo "<br>";
 echo "The Division is $div";
 echo "<br>";
 echo "The Remainder is $rem";






?>