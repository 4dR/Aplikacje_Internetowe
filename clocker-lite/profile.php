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

    <div class="modify-group">
        <div class="modify-group-zone">
            <div class="exit-zone">
                <i class="fas fa-times"></i>
            </div>
            <h4>Edit group</h4>
            <form action="edit_group.php" method="GET">
                <input type="hidden" class="modify-hidden" name="modifyid">
                <input type="text" name="groupname" placeholder="New name">
                <textarea name="desc" placeholder="New description"></textarea>
                <input type="submit" value="Change" class="addgroup-button">
                
            </form>
            <h4 class="modify-h4">Add user group</h4>
            <form action="" id="">
                <input type="hidden" class="modify-hidden">
            </form>
        </div>
    </div>

    <header>
        
    <?php include('nav.php'); ?>

    </header>

    <div class="welcome welcome-profile">
        <h2>User profile</h2>
        <h3><?php if(isset($_SESSION['login'])) {
            echo $_SESSION['login'];
        }?></h3>
    </div>

    <div class="profile-container container">
        <div class="row">
            <div class="col-4 profile-column">
                <h4>Data</h4>
                <?php
                $userid = $_SESSION['id'];
                    $sql = "SELECT `time` FROM `user` WHERE `id` = '$userid'";
                    $result = $conn->query($sql);

                    $row = $result->fetch_assoc();
                    
                    $sumTime = intval($row['time']) / 60;
                ?>        


                <p>Total time: <?php echo round($sumTime) . " minut."; ?></p>
                <h4>My groups</h4>
                <?php 
                    $sql = "SELECT * FROM `usersgroup`";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            ?> <form action="/delete_group.php" method="GET">
                                <div class="single-profile-project">
                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="groupid">
                                    <p><?php echo $row['name']; ?></p>                             
                                        <?php if ($_SESSION['rank'] === '2') { ?>
                                            <div class="right-buttons">
                                                <div class="edit-button" onclick="modifyGroup(<?php echo $row['id']; ?>);">
                                                    Modify
                                                </div>
                                                <input type="submit" value="Delete">
                                            </div>
                                      <?php } ?>
                                </div>
                                
                        </form> <?php
                        }
                    }
                ?>
                <a href="/addgroup.php">
                    <div class="profile-newproject">
                        <i class="fas fa-plus-circle"></i>Add new
                    </div>
                </a>
            </div>
            <div class="col-4 profile-column">
                <h4>Active projects</h4>
                <?php 
                    $sql = "SELECT * FROM `project`";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            ?> <form action="/delete_project.php" method="GET">
                                <div class="single-profile-project">
                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="projectid">
                                    <p><?php echo $row['name']; ?></p>
                                    <?php if ($_SESSION['rank'] === '2') {
                                        ?> <input type="submit" value="Delete"> <?php
                                    } ?>
                                </div>
                                
                        </form> <?php
                        }
                    }
                ?>
                <a href="/addproject.php">
                    <div class="profile-newproject">
                        <i class="fas fa-plus-circle"></i>Add new
                    </div>
                </a>
            </div>
            <div class="col-4 profile-column">
                <form action="/sesja.php">
                    <input class="<?php if(isset($_SESSION['id_sesji'])) { echo 'end-job-btn'; } ?>" type="submit" value="<?php if(isset($_SESSION['id_sesji'])) { echo 'End job'; } else { echo 'Start job'; } ?>">
                </form>
                <?php 
                if(isset($_SESSION['id_sesji'])) {
                    $sessionid = $_SESSION['id_sesji'];
                    $sql = "SELECT `start_time`, `end_time` FROM `timelogentry` WHERE id = '$sessionid'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                    }

                    $currentTime = (strtotime(date('Y/m/d H:i:s')) - $row['start_time']) / 60;
                ?>
                <p>Session time: <?php echo round($currentTime) . ' minut.'; }?></p>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php

$conn->close(); 
    } else {
        header('Location: /logowanie.php');
    }
?>