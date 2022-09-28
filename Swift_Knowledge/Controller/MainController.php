<?php
include "../Model/User.php";
$choix=$_GET['choix'];
switch($choix){
    case "connexion":
        include "../View/login.phtml";
        break;

    case "register":

        include "../php/register.php";
        break;
    
    case "verif":    
        if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))
        {
            $errorMail="<div class='alert alert-danger' role='alert'>Mail invalide</div>";
            include "../php/register.php";
            break;
            
        }elseif(!$_POST["nom"]){
            $errorNom="<div class='alert alert-danger' role='alert'>nom vide ! veuillez saisir un nom valide </div>";
            include "../php/register.php";
            break;
            
        }elseif(!$_POST["prenom"]){
            $errorPrenom="<div class='alert alert-danger' role='alert'>prénom vide ! veuillez saisir un prénom valide </div>";
            include "../php/register.php";
            break;
            
        }elseif(!$_POST["password"] || strlen($_POST["password"]) <8){
            $errorPassword="<div class='alert alert-danger' role='alert'>mot de passe invalide ! veuillez saisir un mot de passe comprenant 8 caractères ou plus </div>";
            include "../php/register.php";
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
    

    default :
        include "../View/home.phtml";
        break;
        
}

