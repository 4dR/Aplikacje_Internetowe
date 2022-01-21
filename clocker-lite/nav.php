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
                    <div class="my-name my-name-pc">
                        <a href="/profile.php">
                            <?php echo "Welcome " . $_SESSION['login']; ?>
                        </a>
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
            <?php if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']) { ?> 
                    <div class="my-name my-name-mobile">
                        <?php echo "Witaj " . $_SESSION['login']; ?>
                    </div>
                    
                <?php } ?>
            <div class="burger">
                <i class="fas fa-bars"></i>
            </div>
        </nav>