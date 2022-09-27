<?php

$choix=$_GET['choix'];

switch($choix){
    case "connexion":
        include "../View/connexion.phtml";
        break;

    case "inscription":
        include "../View/inscription.phtml";
            
    default :
        echo "";
    
}