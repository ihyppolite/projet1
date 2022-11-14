<?php
require "../Model/FicheModel.php";

$set = 'no';

if (!empty($_GET)) {

    $recherche = $_GET['recherche'] . '%';
    $categorie = $_GET['categorie'];

    $fiche = new FicheModel;
    $fiches = $fiche->trouveUneFicheRecherche($recherche, $categorie);

    if (empty($fiches)) {
        $text = 'pas de fiche correpondante';
    };
} else {

    header("home.php");
}
