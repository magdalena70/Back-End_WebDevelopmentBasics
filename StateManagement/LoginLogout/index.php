<?php
session_start();
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: login.php");
    exit;
}

$users = [
    1 => [
        "username" => "ivan",
        "password" => md5("333")
    ],
    2 => [
        "username" => "minka",
        "password" => md5("123")
    ],
    3 => [
        "username" => "todor",
        "password" => md5("todorov")
    ],
    4 => [
        "username" => "penka",
        "password" => md5("penka")
    ]
];

//var_dump(basename($_SERVER['PHP_SELF'])).exit; // check for current page
$currentPage = basename($_SERVER['PHP_SELF']);

if(!isset($_SESSION['id']) && $currentPage != "login.php"){
    header("Location: login.php");
    exit;
}