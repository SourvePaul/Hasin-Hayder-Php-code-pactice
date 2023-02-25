<?php 
session_start([
    'cookie_lifetime' => 300 //5 mintutes
]);
// session_destroy();
$error = false;

if(isset($_POST['username']) && isset($_POST['password'])) {
    if( $_POST['username'] == 'admin' && $_POST['password'] == 'rabit' ) {
            $_SESSION['loggedIn'] = true;
    } else {
        $error = true;
        $_SESSION['loggedIn'] = false;
    }
}

if(isset($_POST['logout'])) {
    $_SESSION['loggedIn'] = false;
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Auth </title>
    <!--- Milligram and Google fonts cdn  --->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!--- Custom Css Style --->
    <style>
    body {
        margin-top: 30px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 cloumn-offset-20">
                <h1>Simple Auth Example</h1>
            </div>
        </div>

        <div class="row">
            <div class="column column-60 cloumn-offset-20">
                <?php
                if($_SESSION['loggedIn'] == true) {
                    echo "Hello Admin, Welcome!";
                } else {
                    echo "Hello Stranger, Login Below";
                } 
               ?>
            </div>
        </div>


        <div class="row">
            <div class="column column-60 cloumn-offset-20">
                <?php 
                if($error) {
                    echo "<blockquote> Username or Password didn't match </blockquote>";     
                    }
                    if( $_SESSION['loggedIn'] == false):
                ?>
                <main>
                    <form action="" method="POST">
                        <label for="username">UserName: </label>
                        <input type="text" name="username" id="username">

                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password">

                        <button type="submit" class="button-primary" name="submit"> Login</button>
                    </form>
                </main>

                <?php 
                else:
                ?>

                <main>
                    <form action="auth.php" method="POST">
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" class="button-primary" name="submit"> LogOut</button>
                    </form>
                </main>

                <?php 
                endif;
                ?>

            </div>
        </div>

    </div>
</body>

</html>