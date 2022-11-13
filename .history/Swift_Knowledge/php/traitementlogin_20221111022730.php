<?php 
include "../Model/User.php";

if(!empty($_POST))
{
    $user = new User();
$responseUser=$user ->verifUser($_POST["mail"],$_POST["password"]);//appel la méthode searchUser pour vérifier si l'user s'est inscrit. Si oui alors il peut se connecter

if(isset($responseUser))
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