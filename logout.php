<?php
session_start();
if(!isset($_SESSION['login_email'])){
    header('location:login.php');
}

unset($_SESSION['login_email']);
header('Location: login.php');

?>
