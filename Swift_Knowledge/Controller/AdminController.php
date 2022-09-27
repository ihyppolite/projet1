<?php

$choixAdmin=$_GET['choixAdmin'];

switch($choixAdmin){
    case "supprimer":
        include "";
        break;

    case "modifier":
        include "";

    case "ajouter":
        include "";
                
    default :
        echo "";
    
}