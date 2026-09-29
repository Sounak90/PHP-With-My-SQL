<?php

$fullname=$_POST["username"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];


$hostname="localhost"; //127.0.0.1
$username = "root";
$password = "";
$database = "blooddonation";

$con = new mysqli($hostname,$username,$password,$database);



if($con){
    //echo "Connection successful";
    $sql = "insert into registration (fullname,gender,email,dob,mobile) 
    values  ('$fullname','$gender','$email','$dob','$mobile')";

    if($con->execute_query($sql)){
        echo "Record inserted";
    }else{
        echo "Record failed to be inserted";
        die("Error in connection".mysqli_error($con));
    }

}
else{
    die("Error in connection".mysqli_error($con));
}


?>