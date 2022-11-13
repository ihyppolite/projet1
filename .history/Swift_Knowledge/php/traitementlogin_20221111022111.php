<?php 
include "../Model/User.php";

if(empty($_POST))
{
$responseUser=User::searchUser($_POST["mail"],$_POST["password"]);//appel la méthode searchUser pour vérifier si l'user s'est inscrit. Si oui alors il peut se connecter
var_dump($responseUser);
if($responseUser)
{
    $_SESSION["loginMes"]= "Vous etes connecté";
    $_SESSION["idUser"]= User::findUserInfo($_POST["mail"],$_POST["password"]);
    header("home.php");
}
else
{
 $notification="toto";
 header("login.php");
}
}