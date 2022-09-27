<?php

$choix=$_GET['choix'];

switch($choix){
    case "connexion":
        include "../View/login.phtml";
        break;

    case "inscription":
        include "../View/register.phtml";

    default :
        echo "";
    
}