<?php
require "../Model/FicheModel.php";

$set = 'no';

if (!empty($_GET)) {

    $recherche = $_GET['recherche'] . '%';
    $categorie = $_GET['categorie'];

    $fiche = new FicheModel;
    $reponse = $fiche->trouveUneFicheRecherche($recherche, $categorie);

    if (empty($reponse)) {
        $text = 'pas de fiche correpondante';
    };
} else {

    header("home.php");
}
