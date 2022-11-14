<?php
require "../Model/FicheModel.php";

$set = 'no';

if (!empty($_GET)) {

    $recherche = $_POST['titreFiche'] . '%';
    $categorie = $_GET['categorie'];

    $fiche = new FicheModel;
    $fiches = $fiche->trouveUneFicheRecherche($recherche, $categorie);

    $template = "../View/recherche_affiche.phtml";
    require "../View/layout.phtml";
} else {

    header("home.php");
}
