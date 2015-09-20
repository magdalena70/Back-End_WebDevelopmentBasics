<?php
session_start();

if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
}

echo "Your session is for " . ++$_SESSION['count'] . " count";