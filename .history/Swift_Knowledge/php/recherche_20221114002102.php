<?php
require "../Model/FicheModel.php";

$set = 'no';

if (!empty($_GET)) {

    $recherche = $_GET['recherche'] . '%';
    $categorie = $_GET['categorie'];

    $fiche = new FicheModel;
    $fiches = $fiche->trouveUneFicheRecherche($recherche, $categorie);

    $template = "../View/recherche.phtml";
    require "../View/layout.phtml";
} else {

    header("home.php");
}
