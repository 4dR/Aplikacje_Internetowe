<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();

    $login = $_SESSION['login'];


    $date = strtotime(date('Y/m/d H:i:s'));

    if(!isset($_SESSION['id_sesji'])) {

        $userid = intval($_SESSION['id']);

        $sql = "INSERT INTO `timelogentry` (`start_time`, `end_time`, `projekt_id`, `user_id`) VALUES('$date', 0, 0, '$userid')";
        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "New record created successfully";
            $lastIdsql = "SELECT MAX(id) FROM `timelogentry`";
            $result2 = $conn->query($lastIdsql);
            if ($result2->num_rows > 0) {
                $row = $result2->fetch_assoc();
            }

            $_SESSION['id_sesji'] = $row['MAX(id)'];

            header("Location: /profile.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: /profile.php");
            
        }

    } else {
        $sessionid =  $_SESSION['id_sesji'];
        $sql = "UPDATE `timelogentry` SET `end_time` = '$date' WHERE id = '$sessionid'";
        $result = $conn->query($sql);

        if($result === TRUE) {
            $sql2 = "SELECT `start_time`, `end_time` FROM `timelogentry` WHERE id = '$sessionid'";
            $result2 = $conn->query($sql2);

            if ($result2->num_rows > 0) {
                $row = $result2->fetch_assoc();
            }

            $currentTime = strtotime(date('Y/m/d H:i:s')) - $row['start_time'];

            $login = $_SESSION['login'];

            $sql3 = "UPDATE `user` SET `time` = `time` + '$currentTime' WHERE `login` = '$login'";
            $result3 = $conn->query($sql3);

            if($result3 === TRUE) {
                unset($_SESSION['id_sesji']);
                echo 'Sesja zakończona';
                header("Location: /profile.php");
            }
        }
    }

    $conn->close(); 
?>                                                                                                                                                                                                                                                                                          