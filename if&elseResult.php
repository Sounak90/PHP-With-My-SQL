<?php
    $num = $_POST["val"];
    if($num%2 == 0){
        echo "The $num is even";
    }
    else{
        echo "The $num is odd";
    }
?>