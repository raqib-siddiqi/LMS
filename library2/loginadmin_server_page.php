<?php

include("data_class.php");

session_start();

$login_email=$_GET['login_email'];
$login_pasword=$_GET['login_pasword'];
$_SESSION['isLogin']=true;
if($login_email==null||$login_pasword==null){
    $emailmsg="";
    $pasdmsg="";
    
    if($login_email==null){
        $emailmsg="Email Empty";
    }
    if($login_pasword==null){
        $pasdmsg="Pasword Empty";
    }

    header("Location: index.php?ademailmsg=$emailmsg&adpasdmsg=$pasdmsg");
}

elseif($login_email!=null&&$login_pasword!=null){
    $_SESSION['isLogin']=true;  
    echo "ok";
    $obj=new data();
    $obj->setconnection();
    $obj->adminLogin($login_email,$login_pasword);
  
}




