<?php
    session_start();

    if(isset($_SESSION['superverse_uid_google'])){
        header("Location: home.php"); 
        exit();
    }else{
        header("Location: login.php"); 
        exit();
    }

?>