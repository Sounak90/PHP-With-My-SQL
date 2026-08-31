<?php
    $marks = $_POST["val"];
    if($marks > 800 && $marks <=1000){
        echo "1st Class";
    }
    elseif($marks > 600 && $marks <=800){
        echo "2nd Class";
    }
    elseif($marks > 400 && $marks <=600){
        echo "3rd Class";
    }
    else{
        echo "Failed";
    }
?>