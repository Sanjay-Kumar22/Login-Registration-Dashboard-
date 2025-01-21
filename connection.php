<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "login_registration_form";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
   // echo "connection sucessfull";
} else {
    echo "connection failed";
}

?>