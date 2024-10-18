<?php
require_once dirname(__DIR__) . "/layout/User/header.php";

require_once "../include/connection.php";

$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";
$password = "";

$errormessage = "";
$successmessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'GET'){
    // GET show the data of table

    if(isset($_GET['id'])){
        header("Location: /myshop/dashboard.php");
        exit();
    }
    $id = $_GET['id'];

    $sql = "SELECT * FROM `client` WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("Location: /myshop/dashboard.php");
        exit();
    }

    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $password = $row['password'];

}
else{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    do {
        if( empty($name) || empty($email) || empty($phone) || empty($address) || empty($password)){
            $errormessage = "EMpty fields";
            break;
        }

        $sql = "UPDATE `client`" .
        "SET name = '$name', email = '$email', phone = '$phone', address = '$address', password = '$password'" .
        "WHERE id = '$id'";
        $result = $conn->query($sql);

        if(!$result){
            $errormessage = "Invalid quesry" . $conn->error;
            break;
        }

        $successmessage = "Client Updated successfully";
    } while (false);
}