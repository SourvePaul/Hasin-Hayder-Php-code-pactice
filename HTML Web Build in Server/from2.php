<?php
include_once "from2Function.php";
$fruits = ["Mango","banana","lemon","apple","lichi"];
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
            <p>
                <?php
                    // if(isset($_POST['fruits']) && $_POST['fruits'] != '') {
                    //     printf("You are selected : %s", filter_input( INPUT_POST, 'fruits',FILTER_SANITIZE_STRING));
                    // }

                    // $sfruits = $_POST['fruits'] ?? array();
                    $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY) ?? array();
                    if(count($sfruits)>0) {
                        echo "You are selected: ".join(", ",$sfruits);
                    }
                ?>
            </p>
        </div>
    </div>
    <div class="row">
    <div class="column column-60 cloumn-offset-20">
        <form action="" method="POST">
        <label for="friuts">Select some fruits</label>
        <select style="height: 200px;" name="fruits[]" id="fruits" multiple>
            <option value="" disabled selected>Select Some Fruits</option>
            <?php displayOptions($fruits, $sfruits); ?>
            
            
            <!-- <option value="mango">Mango</option>
            <option value="lemon">Lemon</option>
            <option value="apple">Apple</option>
            <option value="banana">Banana</option> -->
        </select>

        <button type="submit">Submit</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html>