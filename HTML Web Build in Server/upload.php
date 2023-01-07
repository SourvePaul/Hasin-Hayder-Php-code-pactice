<?php
$allowedTypes = array ( 
    'image/png',
    'image/jpg',
    'image/jpeg'
);
 if($_FILES['pic']) {
    // if($_FILES['pic']['type'] == 'image/jpg' || $_FILES['pic']['type'] == 'image/png') 
    if( in_array($_FILES['pic']['type'], $allowedTypes) !== false && $_FILES['pic']['size'] < 5*1024*1024) {
        move_uploaded_file($_FILES['pic']['tmp_name'],"imageFiles/".$_FILES['pic']['name']);
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Form</title>
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
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, praesentium. Saepe, aut quidem ullam eveniet tenetur illum ratione maiores possimus at deleniti sequi, veniam delectus necessitatibus nesciunt fugiat voluptatem blanditiis.</p>

            <pre>
                <p>
                    <?php 
                    print_r($_POST);
                    print_r($_FILES);
                    ?>
                </p>
            </pre>
        </div>
    </div>
    <div class="row">
    <div class="column column-60 cloumn-offset-20">
        <form action="" method="POST" enctype="multipart/form-data">
        <label for="fName">First Name: </label>
        <input type="text" name="fName" id="fName">

        <label for="lName">Last Name: </label>
        <input type="text" name="lName" id="lName">

        <label for="pic" class="label-inline" style="font-size: 17.5px; font-weight:bold;">Image:  </label>
        <input type="file" name="pic" id="pic">
    </br>
        <button type="submit">Submit</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html>