<?php
    $fullName = $_POST["fullname"];
    $mobileNumber = $_POST["mobile"];

    $serverName = "localhost";
    $username = "root";
    $password = "";
    $database = "personal";

    $con = new mysqli($serverName, $username, $password, $database);

    if ($con) {
        $sql = "insert into phonebook(fullname, phonenumber) value ('$fullName', '$mobileNumber')";
        $con->execute_query($sql);
        echo "Record inserted Successful";
    } else {
        die("Error in connection");
    }
?>