<?php 
require "../Model/FicheModel.php";

$template = "../View/recherche.phtml";
require "../View/layout.phtml";

if(!empty($_GET)){

    $recherche= $_GET['recherche'].'%';
    $categorie= $_GET['categorie'];

    $fiche= new FicheModel;
    $reponse=$fiche->trouveUneFiche($recherche,$categorie);

    return $reponse;


}
else {

        header("home.php");

    }