<?php
include "../Model/User.php";
$choix=$_GET['choix'];
switch($choix){
    case "connexion":
        //$alertConnexionFail=""; //lorsqu'on va pour la première fois sur la page connexion, on ne sait pas encore si la personne à reussi à se connecter
                                //évite l'erreur undefined variable
        include "../php/login.php";
        break;

    case "register":

        include "../php/register.php";
        break;
    
    case "verif":    
        if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))//vérifier si le mail est bien du format mail
        {
            $errorMail="<div class='alert alert-danger' role='alert'>Mail invalide</div>";
            include "../php/login.php";
            break;
            
        }elseif(!$_POST["nom"]){//vérifie si le nom est vide
            $errorNom="<div class='alert alert-danger' role='alert'>nom vide ! veuillez saisir un nom valide </div>";
            include "../php/login.php";
            break;
            
        }elseif(!$_POST["prenom"]){ //vérifie si le prénom est vide
            $errorPrenom="<div class='alert alert-danger' role='alert'>prénom vide ! veuillez saisir un prénom valide </div>";
            include "../php/login.php"; 
            break;
            
        }elseif(!$_POST["password"] || strlen($_POST["password"]) <8){ //vérifie si l variable n'est pas vide et si le mdp est supérieur à 8.
            $errorPassword="<div class='alert alert-danger' role='alert'>mot de passe invalide ! veuillez saisir un mot de passe comprenant 8 caractères ou plus </div>";
            include "../php/login.php";
            break;
        }

        else{
            $reponse=User::addUser($_POST["nom"], $_POST["prenom"],$_POST["mail"],$_POST["password"]);
            
        }

        if($reponse){
            include "../php/home.php";
            break;

        }else{
            include "../View/error_register.phtml";
            break;
        }

    case "verifConnexion":

        $responseUser=User::searchUser($_POST["mail"],$_POST["password"]);//appel la méthode searchUser pour vérifier si l'user s'est inscrit. Si oui alors il peut se connecter

        if($responseUser){
            $alertConnexionSuccess= "<div class='alert alert-success' role='alert'> Authentification réussi !, Bienvenue </div>";
            
            include "../php/home.php";

        }else{
            $alertConnexionFail= "<div class='alert alert-danger' role='alert'>Authentification échouée, veuillez vérifier votre mail et votre mot de passe </div>";
            
            include "../php/login.php";


        }

    }


