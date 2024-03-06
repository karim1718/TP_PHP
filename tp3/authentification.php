<?php
include("user.php"); 

if (isset($_GET['login']) && isset($_GET['password'])) {
    $login = $_GET['login'];
    $password = $_GET['password'];

    $user = new User($login, $password);

    if ($user->connect()) {
        echo $user; 
    } else {
        echo "Connexion échouée. Veuillez vérifier vos identifiants.";
    }
}
?>
