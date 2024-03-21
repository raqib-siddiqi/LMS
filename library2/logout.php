<?php
    
    session_start();

    echo "|".isset($_SESSION["isLogin"])."|";
    echo "|".isset($_SESSION["login"])."|";
    
    session_destroy();
    setcookie("username", "", time()-(60*60*24*30), "/");
    setcookie("password", "", time()-(60*60*24*30), "/");
    header("Location: index.php");

?>