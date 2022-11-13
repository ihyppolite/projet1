<?php 
include "../Model/User.php";
session_start();
if(!empty($_POST))
{
    $user = new User();
$responseUser=$user ->verifUser($_POST["mail"],$_POST["password"]);//appel la méthode searchUser pour vérifier si l'user s'est inscrit. Si oui alors il peut se connecter

if(isset($responseUser))
{
    
    $_SESSION["loginMes"]= "Vous etes connecté";
    $id=$user->findUserInfo($_POST["mail"],$_POST["password"]);
    $_SESSION["idUser"]=$id["0"];

    var_dump($_SESSION);
    header("Location:home.php");
    die();
}
else
{
    $_SESSION["loginErr"]= "Vous etes connecté";
 header("Location:login.php");
 die();
}
}