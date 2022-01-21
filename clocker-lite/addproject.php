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
        <h2>New project</h2>
        
    </div>

    <div class="container add-project">
        <!-- SELECT CUSTOMERS -->

            <?php 
                $sql = "SELECT * FROM `customer`";
                $result = $conn->query($sql);
                // var_dump($result->fetch_assoc()); die;
            ?>

        <!-- EOF SELECT CUSTOMERS -->

        <!-- SELECT GROUPS -->
        <!-- EOF SELECT GROUPS -->
        <form action="/check_project.php" method="GET">
            <input type="text" name="projectname" placeholder="Project name*">
            <select name="group">
                <option value="-1">Choose group</option>
            </select>
            <select name="customer">

                <option value="-1">Choose customer*</option>
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) { ?>

                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['name']; ?>
                            </option>
            
                    <?php } ?>
                <?php } ?>
               
            </select>
            <input type="submit" value="Add new" class="new-project-button">
        </form>
    </div>

    <div class="container add-customer">
        <div class="add-customer-inner">
            <form action="/check_customer.php" method="GET">
                <h4>Add new customer</h4>
                <input type="text" name="customername" placeholder="Name">
                <input type="text" name="customeremail" placeholder="E-mail">
                <textarea name="customertextarea" placeholder="Description"></textarea>
                <input type="submit" value="Add customer" class="customer-add-button">
            </form>
            <div class="add-new-group-zone">
                <h4>Add new group</h4>
                <a href="/addgroup.php">
                    <input type="button" value="Add group" class="customer-add-button">
                </a>
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