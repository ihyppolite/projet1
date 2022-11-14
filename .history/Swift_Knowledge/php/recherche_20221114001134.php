<?php
require "../Model/FicheModel.php";

$set = 'no';
$result = '';
if (!empty($_GET)) {

    $recherche = $_GET['recherche'] . '%';
    $categorie = $_GET['categorie'];

    $fiche = new FicheModel;
    $reponse = $fiche->trouveUneFicheRecherche($recherche, $categorie);

    if (empty($reponse)) {
    }
} else {

    header("home.php");
}
