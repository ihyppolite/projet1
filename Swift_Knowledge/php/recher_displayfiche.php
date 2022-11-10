<?php 
include "../Model/Categorie.php";

$listeCategories= Categorie::afficherEnsembleDesCategories();
$template = "../View/recherche.phtml";
require "../View/layout.phtml";