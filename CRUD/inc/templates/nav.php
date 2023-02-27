<?php 
session_name('mycrud');
session_start();
?>
<div>
    <div class="float-left">
        <p>
            <a href="index.php?task=report">All Students</a>
            <?php if(hasPrivilege()): ?>
            |
            <a href="index.php?task=add"> Add new student</a>
            <?php endif; ?>
            <?php if(isAdmin()): ?>
            |
            <a href="index.php?task=seed"> Seed </a>
            <?php endif; ?>
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