<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();
    $projectid = intval($_GET['projectid']);
    


    $sql = "DELETE FROM `project` WHERE `id` = '$projectid'";
    $result = $conn->query($sql);

    header("Location: /profile.php");
    
    $conn->close(); 
?>                                                                                                                                                                                                                                                                                          