<?php
    header('Content-Type: application/json');

    session_start();

    if(isset($_POST['uid'])){
        $uid = $_POST['uid'];

        $_SESSION['superverse_uid_google'] = $uid;
    }

    echo json_encode("Stored");
?>