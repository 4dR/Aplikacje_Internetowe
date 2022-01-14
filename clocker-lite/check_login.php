<?php
    session_start();
    include "connect.php";

    $conn = OpenCon();

    // echo $_GET['login'] . $_GET['pass'];
    $login = $_GET['login'];
    $pass = $_GET['pass'];

    $sql = "SELECT * FROM user WHERE login = '$login'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($pass === $row['password']) {
                $_SESSION['zalogowany'] = true;
                $_SESSION['login'] = $row['login'];
                header('Location: /');        
            } else {
                header('Location: /logowanie.php'); 
            }                                                                                                                                                                                       
        }
    } else {
        header('Location: /logowanie.php'); 
    }                                                                                                   

    $conn->close();
?>                                                                                                                                                                                                                                                                                          