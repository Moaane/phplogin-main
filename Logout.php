<?php 
    session_start();
    session_destroy();

    header('Location: LoginTemplate1.php');
?>