<?php
require_once "inc/functions.php";
$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';

if('edit' == $task) {
    if(!hasPrivilege()) {
        header('location:index.php?task=report');
    }
}

if( 'delete' == $task) {
    if(!isAdmin()) {
        header('location:index.php?task=report');
        return;
    }
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    if( $id>0) {
        deleteStudent($id);
        header('location:index.php?task=report');
    }
}
if('seed' == $task) {
    if(!isAdmin()) {
        header('location:index.php?task=report');
        return;
    }
    seed();
    $info = "Seeding is complete";
}

$fname = '';
$lname = '';
$roll = '';
if(isset($_POST['submit'])) {
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

    //update existing student
    if( $id) {
        $result = updateStudent($id, $fname, $lname, $roll );
        if($result) {
            header('location:index.php?task=report');
        }else {
            $error = 1;
        }
    }else {
        //add a new student
        if( $fname !='' && $lname !='' && $roll !='' ) {
            $result = addStudent( $fname, $lname, $roll );
            if($result) {
                header('location:index.php?task=report');
            }else {
                $error = 1;
            }
        }
    }
     
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRUD </title>
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
                <h1>Welcome CRUD</h1>
                <p>Lorem ipsum dolor sit amer consenter adipisicing elit. Laudanum rerum praesentium numquam tempore
                    fuga quia voluptatum fugiat voluptas nulla fugit excepturi modi soluta atque aliquid, voluptatibus
                    harum quasi saepe illum!</p>

                <?php include_once('inc/templates/nav.php'); ?>
                <hr />
                <?php 
                if($info!='') {
                    echo "<p>{$info}</p>";
                }
                ?>

            </div>
        </div>

        <?php if ('1' == $error): ?>
        <div class="row">
            <div class="column column-60 cloumn-offset-20">
                <blockquote>
                    Duplicate Roll Number
                </blockquote>
            </div>
        </div>
        <?php endif; ?>

        <?php if ('report' == $task): ?>
        <div class="row">
            <div class="column column-60 cloumn-offset-20">
                <?php generateReport(); ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if ('add' == $task): ?>
        <div class="row">
            <div class="column column-60 cloumn-offset-20">
                <main>
                    <form action="index.php?task=add" method="POST">
                        <label for="fname">First Name: </label>
                        <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                        <label for="lname">Last Name: </label>
                        <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                        <label for="roll">Roll: </label>
                        <input type="number" name="roll" id="age" placeholder="Enter the number..."
                            value="<?php echo $roll; ?>">

                        <button type="submit" class="button-primary" name="submit"> Save</button>
                    </form>
                </main>
            </div>
        </div>
        <?php endif; ?>

        <?php 
        if ('edit' == $task): 
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        $student = getStudent($id);
        if( $student ):
        ?>
        <div class="row">
            <div class="column column-60 cloumn-offset-20">
                <main>
                    <form method="POST">
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                        <label for="fname">First Name: </label>
                        <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>">

                        <label for="lname">Last Name: </label>
                        <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?>">

                        <label for="roll">Roll: </label>
                        <input type="number" name="roll" id="age" value="<?php echo $student['roll']; ?>">

                        <button type="submit" class="button-primary" name="submit"> Update </button>
                    </form>
                </main>
            </div>
        </div>
        <?php 
            endif; 
            endif;
        ?>

    </div>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>