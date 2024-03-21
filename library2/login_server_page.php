<?php

include("data_class.php");

session_start();

$login_email=$_GET['login_email'];
$login_pasword=$_GET['login_pasword'];
$_SESSION['login']=true;


if($login_email==null||$login_pasword==null){
    $emailmsg="";
    $pasdmsg="";
    
    if($login_email==null){
        $emailmsg="Email Empty";
    }
    if($login_pasword==null){
        $pasdmsg="Pasword Empty";
    }

    header("Location: index.php?emailmsg=$emailmsg&pasdmsg=$pasdmsg");
}

elseif($login_email!=null&&$login_pasword!=null){
    $_SESSION['login']=true;
    $obj=new data();
    $obj->setconnection();
    $obj->userLogin($login_email,$login_pasword);

}
