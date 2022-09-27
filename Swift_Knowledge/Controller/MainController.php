<?php
include "../Model/User.php";
$choix=$_GET['choix'];

switch($choix){
    case "connexion":
        include "../View/login.phtml";
        break;

    case "inscription":
        include "../View/register.phtml";
        break;

    case "register":
        $reponse=User::addUser($_POST["nom"], $_POST["prenom"],$_POST["mail"],$_POST["password"]);

        if($reponse==true){
            include "../php/home.php";
            break;

        }else{
            include "../View/error_register.phtml";
            break;
        }
    

    default :
        include "../View/home.phtml";
        break;
        
}

