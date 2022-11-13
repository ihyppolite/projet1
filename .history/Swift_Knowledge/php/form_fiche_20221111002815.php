<?php

require "./Model/Categorie.php";

$cat = new Categorie;

$categories = $cat ->afficherEnsembleDesCategories();

$template = "..View/add_fiche.phtml";
require "../View/layout.phtml";






