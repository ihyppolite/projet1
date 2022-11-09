<?php

include "../Model/Admin.php";

$choix=$_GET['choix'];

/*switch($choixAdmin){
    case "supprimer":
        include "";
        break;

    case "modifier":
        include "";

    case "ajouter":
        include "";
                
    default :
        echo "";
    
}*/

switch($choix){
    case "connexion" :
        include "../php/loginAdmin.php";
        break;

    case "verifConnexion" :
        $response= Admin::verifier($_POST["nameAdmin"],$_POST["password"]);
        if($response){
            $alertConnexionSuccess= "<div class='alert alert-success' role='alert'> Authentification réussi !, Bienvenue </div>";
            
            include "../php/pageAccueilAdmin.php";

        }else{
            $alertConnexionFail= "<div class='alert alert-danger' role='alert'>Authentification échouée, veuillez vérifier votre mail et votre mot de passe </div>";
            
            include "../php/loginAdmin.php";


        }
}