<?php
session_start();

$host='localhost';
$bd='NOM DE LA BD';
$login='';
$password='';

try {
     $pdo = new PDO('mysql:host='.$host.';dbname='.$bd, $login, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}

catch (Exception $e) {
     die ($e -> getMessage());
}

if($_SERVER['REQUEST_URI']) {
    header('Location: index.php');
}

global $pdo;

?>
