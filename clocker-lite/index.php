<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobilecss.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bcbbe0b4e9.js" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <title>Clocker-lite</title>
    
</head>
<body>
    <header>
        
        <nav>
            <div class="left-nav">
                <!-- logo -->
                <h1>Clocker!</h1>
            </div>
            <div class="right-nav">
                <!-- nav opis, log, rej,  -->
                <div class="describe">
                    <a href="#about-us">Describe</a>
                </div>
                <?php if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']) { ?> 
                    <div class="my-name">
                        <?php echo "Witaj " . $_SESSION['login']; ?>
                    </div>
                    <div class="sign-in">
                        <a href="logout.php">Logout</a>
                    </div>
                <?php } else { ?>
                    <div class="sign-in">
                        <a href="logowanie.php">Sign in</a>
                    </div>
                    <div class="sign-up">
                        <a href="rejestracja.php">Sign up</a>
                    </div>
                <?php } ?>
            </div>
            <div class="burger">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <div class="welcome">
        <h2>Clocking system</h2>
        <h3>You can count on us!</h3>
    </div>

    <div class="container about-us">
        <div class="title-zone" id="about-us">
            <h4>
                About us
            </h4>
            <div class="title-straight"></div>
        </div>
        <div class="desc-zone">
            <p>It is a long established fact that a reader will be distracted by
                 the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it has a more-or-less normal
                   distribution of letters, as opposed to using 'Content here, 
                   content here', making it look like readable English.
                    Many desktop publishing packages and web page editors 
                     use Lorem Ipsum as their default model text, and a search for 
                     'lorem ipsum' will uncover many web sites still in their infancy.
                      Various versions have evolved over the years, sometimes by accident,
                 sometimes on purpose (injected humour and the like).</p>
        </div>
    </div>

    <div class="container stats">
        <div class="title-stats">
            <h4>Stats</h4>
            <div class="title-straight"></div>
        </div>
        <div class="stats-zone">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3 stats-column">
                    <i class="fas fa-user"></i>
                    <p>Registered</p>
                    <p>0</p>
                </div>
    
                <div class="col-12 col-md-6 col-xl-3 stats-column">
                    <i class="fas fa-calendar"></i>
                    <p>Weekly stats</p>
                    <p>0</p>
                </div>
    
                <div class="col-12 col-md-6 col-xl-3 stats-column">
                    <i class="fas fa-calendar-week"></i>
                    <p>Monthly stats</p>
                    <p>0</p>
                </div>
    
                <div class="col-12 col-md-6 col-xl-3 stats-column">
                    <i class="fas fa-calendar-check"></i>
                    <p>Yearly stats</p>
                    <p>0</p>
                </div>
            </div> 
        </div>
    </div>

    <footer>
        <i class="far fa-copyright"></i>
        <p>Clocking system!</p>
    </footer>
</body>
</html>