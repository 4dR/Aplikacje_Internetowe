<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();
    $name = $_GET['groupname'];
    $modifyid = $_GET['modifyid'];
    $desc = $_GET['desc'];

    if ($name !== '') {
        $sql = "UPDATE `usersgroup` SET `name` = '$name' WHERE `id` = '$modifyid'";
        $result = $conn->query($sql);  
    }

    if ($desc !== '') {
        $sql = "UPDATE `usersgroup` SET `description` = '$desc' WHERE `id` = '$modifyid'";
        $result = $conn->query($sql);  
    }

    header("Location: /profile.php");
    
    $conn->close(); 
?>                                                                                                                                                                                                                                                                                          