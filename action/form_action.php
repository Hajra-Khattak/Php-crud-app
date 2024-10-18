<?php
require_once dirname(__DIR__) . "/layout/User/header.php";

// require_once "../include/connection.php";


$name = "";
$email = "";
$phone = "";
$address = "";
$password = "";

$errormessage = "";
$successmessage = "";


if(isset($_POST) && !empty($_POST) ){

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

    $insert = "INSERT INTO `client`(`name`,`email`,`phone`,`address`,`password`) VALUES('$name', '$email','$phone','$address','$password')";

    // $result = mysqli_query($conn, $insert);
    $result = $conn->query($insert);

    if(!$result){
        $errormessage = "Invalid query" . $conn->error;
        break;
    }
    $name = "";
    $email = "";
    $phone = "";
    $address = "";
    $password = "";

    $successmessage = "Client added correctly";
    header("Location: /myshop/dashboard.php");
    exit();
    
   } while (false);


   if(!empty($errormessage)){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      {$errormessage}
   </div>";
  }

  if(!empty($successmessage)){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      {$successmessage}
   </div>";
  }
}


?>