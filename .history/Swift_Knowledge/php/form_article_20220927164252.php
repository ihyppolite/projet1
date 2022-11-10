<?php

require "./Model/Categorie.php";

$cat = new Categorie;

$categories = $cat ->afficherEnsembleDesCategories();

$template = "View/add_article.phtml";
require "View/layout.phtml";






