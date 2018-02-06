<?php
session_start();
$_SESSION['host'] = 'mysql:host=localhost;dbname=reservation;charset=utf8';
$_SESSION['ndcSQL'] = 'root';
$_SESSION['mdpSQL'] = '';
$bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);
$_SESSION['pseudo'] = '';
$_SESSION['success']= false;
$_SESSION['login'] = false;
$_SESSION['userId'] = '';
header('Location: ./html/main.php');
?>