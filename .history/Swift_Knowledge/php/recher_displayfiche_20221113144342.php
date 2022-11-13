<?php
include "../Model/Categorie.php";

$set = 'no';

$listeCategories = Categorie::afficherEnsembleDesCategories();
$template = "../View/recherche.phtml";
require "../View/layout.phtml";
