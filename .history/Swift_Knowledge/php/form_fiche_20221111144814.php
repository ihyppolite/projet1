<?php

require "../Model/Categorie.php";

session_start();

$_SESSION["set"]='set';

var_dump($_SESSION);

if(!isset($_SESSION["idUser"])){
    echo('true');
}

if(isset($_SESSION["idUser"])){
    echo('false');
}
if(!isset($_SESSION["idUser"]))
{
    header('location:login.php');

}
 else
 {
    $cat = new Categorie;

$categories = $cat ->afficherEnsembleDesCategories();

$template = "../View/form/form_fiche.phtml";
require "../View/layout.phtml";
 }





