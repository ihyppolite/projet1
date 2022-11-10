<?php
include "../Model/FicheModel.php";

$fiche= new FicheModel;
$reponse=$fiche->trouveUneFiche($titre, $Fiche,$categorie);

$template = "../View/afficheFiche.phtml";
require "../View/layout.phtml";
?>