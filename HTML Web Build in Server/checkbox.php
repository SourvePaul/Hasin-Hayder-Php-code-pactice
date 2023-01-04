<?php 
header('X-XSS-Protection:0');

require_once('function.php');
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
            <?php 
                $fName = '';
                $lName = '';
                $checked ='';

                 if(isset($_REQUEST['checked']) &&  $_REQUEST['checked']==1 ) { 
                    $checked = 'checked';
                }
            ?>
            <p>
                <?php if(isset($_REQUEST['fName']) && ! empty($_REQUEST['fName'])) { 
                     $fName = htmlspecialchars($_REQUEST['fName']);
                    // $fName = filter_input(INPUT_POST, 'fName', FILTER_SANITIZE_URL);
                 } ?>

                <?php if(isset($_REQUEST['lName']) && ! empty($_REQUEST['lName'])) { 
                     $lName = htmlspecialchars($_REQUEST['lName']);
                    // $lName = filter_input(INPUT_POST, 'lName', FILTER_SANITIZE_URL);
                 } ?>
            </p>
            <p>
                First Name: <?php echo $fName; ?> <br/> 
                Last Name: <?php echo $lName; ?>
            </p>

            <?php ?>
        </div>
    </div>
    <div class="row">
    <div class="column column-60 cloumn-offset-20">
        <form action="" method="GET">

        <label for="fName">First Name: </label>
        <input type="text" name="fName" id="fName" value="<?php echo $fName; ?>">

        <label for="lName">Last Name: </label>
        <input type="text" name="lName" id="lName" value="<?php echo $lName; ?>">

        <input type="checkbox" name="checked" id="checked" value="1" <?php echo $checked; ?>>
        <label for="checked" class="label-inline">Checked</label>

        <label class="label">Select Some furits</label>

        <input type="checkbox" name="fruits[]" value="orange" <?php isCHecked('fruits','orange') ?> >
        <label class="label-inline">Orange</label> <br/>
        <input type="checkbox" name="fruits[]" value="mango" <?php isCHecked('fruits','mango') ?> >
        <label class="label-inline">Mango</label> <br/>
        <input type="checkbox" name="fruits[]" value="lemon" <?php isCHecked('fruits','lemon') ?> >
        <label class="label-inline">Lemon</label> <br/>
        <input type="checkbox" name="fruits[]" value="banana" <?php isCHecked('fruits','banana') ?> >
        <label class="label-inline">Banana</label> <br/>


        <button type="submit">Submit</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html>