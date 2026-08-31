<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <label>Input any No.</label>
        <input type="text" name="number"></input>
        <input type="submit" value="Submit"/></br>
    </form>
    <?php
    $x = $_POST["number"];
    // $x = abs($x);
    $x = sqrt($x);
    // echo "<br>the absolute value is: $x";
    echo "<br>the root value is: $x";
    ?>
</body>
</html>