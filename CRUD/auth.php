<?php 
session_name('mycrud');
session_start([
    'cookie_lifetime' => 300 //5 mintutes
]);
// session_destroy();
$error = false;

$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

$fp = fopen("E:\\xamp\\htdocs\\Hasin Hayder code pactice\\crud\\data\\users.txt", "r");
//$fp = fopen(".\\data\\users.txt", "r");

$_SESSION = array(
    'loggedIn' => false // or true, depending on your needs
  );

if( $username && $password) {
    
    $_SESSION['loggedIn'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;

    while($data = fgetcsv($fp)) {
        if( $data[0] == $username &&  $data[1] == md5($password) ) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['user'] = $username;
                $_SESSION['role'] = $data[2];
                header('location:index.php?task=report');
        }
    }
    if(!$_SESSION['loggedIn']) {
        $error = true;
    } 
}

if(isset($_GET['logout'])) {
    $_SESSION['loggedIn'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    session_destroy();
    header('location:index.php');
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
                // echo md5('rabit');
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