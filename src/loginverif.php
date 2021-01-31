<?php
session_start();

include_once('./connexion.php');
include_once('./verif.php');

$user = valid_donnees($_POST["user"]);
$pass = valid_donnees($_POST["password"]);

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = htmlentities($donnees);
    $donnees = htmlspecialchars($donnees);
return $donnees;
}

if (empty($user)) {
    header('Location: ../index.php');
} else {
    try {
        global $pdo;
        $stmt = $pdo -> prepare('SELECT user, password FROM login WHERE user = :user');
        $stmt -> bindParam(':user', $user);
        $stmt -> execute();
        while ($rowtab = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($pass == $rowtab['password']) {
                $_SESSION['user']=$user;
                $_SESSION['pass']=$pass;
                    header('Location: ../index.php?succes=1');
                    exit();
            }
        }
        if(empty($_POST['user'])) {
            header('Location: ../index.php');
        } else {
            header('Location: ../index.php?error=0');
        }         
    } catch(PDOException $e){
        header('Location: ../index.php?error=1');
    }
}
    
?>