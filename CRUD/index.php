<!-- <?php
// require_once "inc/functions.php";
// $info = '';
// $task = $_GET['task'] ?? 'report';
// if('seed' == $task) {
//     seed();
//     $info = "Seeding is complete.";
// }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Document</title>
     <!--- Milligram and Google fonts cdn  --->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!--- Custom Css Style --->
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 cloumn-offset-20">
            <h1>Project-2 CRUD</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, praesentium. Saepe, aut quidem ullam eveniet tenetur illum ratione maiores possimus at deleniti sequi, veniam delectus necessitatibus nesciunt fugiat voluptatem blanditiis.</p>
            <?php include_once('inc/templates/nav.php'); ?>
            <hr/>

            <!-- <?php 
            if($info!='') {
                echo "<p>{$info}</p>";
            }
            ?> -->
        </div>
    </div>
    </div>
</body>
</html>