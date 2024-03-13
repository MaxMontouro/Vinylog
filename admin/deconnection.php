<?php
session_start();

if(isset($_SESSION['test'])){
    $_SESSION['test'] = array();

    session_destroy();

    header("Location: ../loginTest.php");
} else{
    header("Location: ../pageaccueil.php");
}


?>