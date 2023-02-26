<?php 
session_name('mycrud');
session_start();
?>
<div>
    <div class="float-left">
        <p>
            <a href="index.php?task=report">All Students</a> |
            <a href="index.php?task=add"> Add new student</a> |
            <a href="index.php?task=seed"> Seed </a> |
        </p>
    </div>

    <div class="float-right">

        <?php 
        if(!$_SESSION['loggedIn']){ 
        ?>
        <a href="auth.php"> Log In </a>
        <?php 
        }
        else{
        ?>
        <a href="auth.php?logout=true"> LogOut (<?php echo $_SESSION['role'] ?>) </a>
        <?php 
        }
        ?>
    </div>
</div>