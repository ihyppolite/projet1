<?php 
include "../Model/User.php";
session_start();

$responseUser=User::searchUser($_POST["mail"],$_POST["password"]);//appel la méthode searchUser pour vérifier si l'user s'est inscrit. Si oui alors il peut se connecter

if($responseUser)
{
    $_SESSION["loginMes"]= "Vous etes connecté";
    $_SESSION["idUser"]= User::findUserInfo($_POST["mail"],$_POST["password"]);
    header("home.php");
}
else
{
 $_SESSION["loginMes"]= "echec de la connection";
 header("login.php");
}
 