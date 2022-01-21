<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();
    $name = $_GET['groupname'];
    $desc = $_GET['desc'];
    $owner = intval($_SESSION['id']);

    $sql = "INSERT INTO `usersgroup`(`description`, `name`, `owner_id`) VALUES ('$desc', '$name', '$owner')";
    $result = $conn->query($sql);

    header("Location: /profile.php");
    
    $conn->close(); 
?>                                                                                                                                                                                                                                                                                          