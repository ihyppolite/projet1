<?php

$choix=$_GET['choix'];
$action=$_GET['action'];

switch($choix){
    case "connexion":
        include "../View/login.phtml";
        break;

    case "inscription":
        include "../View/register.phtml";

    default :
        include "../View/home.phtml";
    
}

switch($action){
    case "register":
        $reponse=User::addUser($_POST["nom"], $_POST["prenom"]);
        
}

