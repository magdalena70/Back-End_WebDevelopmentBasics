<?php
if(isset($_GET['login'])){
    $userName = htmlentities($_GET['login']);
    setcookie('user', $userName, time() + 20);// 20 sec.
    //header("Location: cookies.php");
    $_COOKIE['user'] = htmlentities($_GET['login']);
}

if(isset($_COOKIE['user'])){
    echo "hi, ".$_COOKIE['user'];
}else{
    echo "You are not logged in.";
}