<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="personal";

$con = new mysqli($hostname,$username,$password,$dbname);

if($con){
    //echo "connection successful";

    $sql = "select * from phonebook";

    $result = $con->execute_query($sql);
    if($result->num_rows>0){
        while($row= $result->fetch_assoc()){
            echo "Id = ".$row["id"]."</br>"."Full Name: ".$row["fullname"]."</br>"."Mobile :".$row["phonenumber"];
            echo "</br>";
        }
    }

}else{
    die("Some error".mysqli_error($con));
}

?>