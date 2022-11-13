<?php 
include "../Model/User.php";

if(!empty($_POST))
{
    $user = new User();
$responseUser=$user ->verifUser($_POST["mail"],$_POST["password"]);//appel la méthode searchUser pour vérifier si l'user s'est inscrit. Si oui alors il peut se connecter

if(isset($responseUser))
{
    
    $_SESSION["loginMes"]= "Vous etes connecté";
    var_dump($user->findUserInfo($_POST["mail"],$_POST["password"]));
    $id=$user->findUserInfo($_POST["mail"],$_POST["password"]);
    $_SESSION["idUser"]=$id["IDUSER"];
    header("home.php");
    die();
}
else
{
 $notification="toto";
 header("login.php");
 die();
}
}