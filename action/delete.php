<?php

// require_once "../dashboard.php";
require_once "../include/connection.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM `client` WHERE id = '$id'";

    $conn->query($sql);
}

header("Location: /myshop/dashboard.php");
exit();

?>