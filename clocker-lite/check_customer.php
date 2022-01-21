<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();
    $name = $_GET['customername'];
    $email = $_GET['customeremail'];
    $desc = $_GET['customertextarea'];

    $sql = "INSERT INTO `customer`(`name`, `description`, `email`) VALUES ('$name', '$desc', '$email')";
    $result = $conn->query($sql);

    header("Location: /addproject.php");
    
    $conn->close(); 
?>                                                                                                                                                                                                                                                                                          