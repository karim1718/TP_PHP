<?php 
$login = $_POST["login"];
$password = $_POST["password"];

if(isset($_POST["login"]) && isset($_POST["login"])) { 
    if ($login == "admin" && $password == "admin") {
        echo "Vous êtes connecté";
    } else {
        echo "Veuillez vérifier vos identifiants";
    }
} else {
    echo "Veuillez vérifier les champs ";
}
?>
