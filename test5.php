<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test5.php" method="post">
        <label>Input any No.</label>
        <input type="text" name="inputstr"></input>
        <input type="submit" value="Submit"/></br>
    </form>
    <?php
    $x = $_POST["inputstr"];
    $x = trim($x);
    $len = strlen($x);
    echo "The length of the string is: $len";
    ?>
</body>
</html>
