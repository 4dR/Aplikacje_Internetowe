<?php
session_start();

if(isset($_SESSION['login'])) {
    include "connect.php";

    $conn = OpenCon();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mobilecss.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bcbbe0b4e9.js" crossorigin="anonymous"></script>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <title>Clocker-lite</title>
    
</head>
<body>
    <header>
        
    <?php include('nav.php'); ?>

    </header>

    <div class="welcome welcome-profile">
        <h2>New group</h2> 
    </div>
    <div class="container addgroup-container">
        <form action="/check_addgroup.php" method="GET">
            <h4>Add group</h4>
            <input type="text" placeholder="Name" name="groupname">
            <textarea name="desc" placeholder="Description"></textarea>
            <input type="submit" value="Add group" class="addgroup-button">
        </form>
    </div>
</body>
</html>
<?php

$conn->close(); 
    } else {
        header('Location: /logowanie.php');
    }
?>