<?php
session_start();

    if(isset($_SESSION['auth']))
    {
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);
        $_SESSION['message'] = "logged out successfuly"; 
    }
    header('location: index.php');

?>