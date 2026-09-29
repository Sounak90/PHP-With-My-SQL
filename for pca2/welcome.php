<?php

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            color: green;
        }
    </style>

</head>

<body>

    <h1>Welcome</h1>

    <h2>
        <?php echo $_SESSION["username"]; ?>
    </h2>

</body>

</html>