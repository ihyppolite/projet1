<?php 
include "../Model/User.php";

$responseUser=User::searchUser($_POST["mail"],$_POST["password"]);//appel la méthode searchUser pour vérifier si l'user s'est inscrit. Si oui alors il peut se connecter

if($responseUser)
{
    $_SESSION["idUser"]= User::findUserInfo($_POST["mail"],$_POST["password"]);
    header("home.php");
}
else
{
 header("login.php");
}
 