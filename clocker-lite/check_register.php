<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();

    // echo $_GET['login'] . $_GET['pass'];
    $login = $_GET['login'];
    $pass = $_GET['pass'];

    $date = date('Y-m-d H:i:s');
    $sql2 = "SELECT * FROM user WHERE login = '$login'";
    $result2 = $conn->query($sql2);


    if ($result2->num_rows === 0) {
        $sql = "INSERT INTO `user` (`id`, `login`, `password`, `time`, `registerDate`, UsersRole_id) VALUES(NULL, '$login', '$pass', 0, '$date', 0)";
        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "New record created successfully";
            header("Location: /");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: /rejestracja.php");
            
        }
    } else {
        
        echo "User already exist!";
    }

    $conn->close(); 
?>                                                                                                                                                                                                                                                                                          