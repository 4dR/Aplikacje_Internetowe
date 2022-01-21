<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();
    $groupid = intval($_GET['groupid']);
    


    $sql = "DELETE FROM `usersgroup` WHERE `id` = '$groupid'";
    $result = $conn->query($sql);

    header("Location: /profile.php");
    
    $conn->close(); 
?>                                                                                                                                                                                                                                                                                          