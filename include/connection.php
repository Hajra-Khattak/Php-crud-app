<?php

$dbserver = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "testdb";

$conn = mysqli_connect($dbserver, $dbusername, $dbpass, $dbname);

if($conn->connect_error){
    echo "Databse connection failed";
}

?>