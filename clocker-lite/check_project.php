<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();
    $projectname = $_GET['projectname'];
    $group = $_GET['group'];
    $customer = $_GET['customer'];
    $time = date('Y/m/d H:i:s');
    $owner = $_SESSION['id'];

    $sql = "INSERT INTO `project`(`name`, `time`, `group_id`, `customer_id`, `owner_id`) VALUES ('$projectname', '$time', '$group', '$customer', '$owner')";
    $result = $conn->query($sql);


    header("Location: /profile.php");
    
    $conn->close(); 
?>                                                                                                                                                                                                                                                                                          