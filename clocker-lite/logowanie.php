<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <link rel="stylesheet" href="./assets/css/logowanie.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Logowanie</title>
</head>
<body>
    <div class="container-fluid section">
        <div class="row main-row">
            <div class="col-5 main-left">
               <form class="login-form" id="login-form" action="check_login.php" method="GET">
                   <div class="logo">
                       <h1>Sign-in</h1>
                   </div>
                   <input type="text" placeholder="example@hotmail.com" id="check-email" name="login">
                   <input type="password" placeholder="Password..." id="check-password" name="pass">
                   <input type="button" value="Sign-in" class="submit-button" id="submit-button">
               </form>
            </div>
            <div class="col-7 main-right">
                <h2>Clocking system</h2>
                <h3>You can count on us!</h3>
            </div>
        </div>
    </div>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/logowanie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>