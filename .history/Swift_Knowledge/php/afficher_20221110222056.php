<?php

require "../Model/FicheModel.php";
require "../Model/Categorie.php";
require "../Model/User.php";

$fiche= new FicheModel;
 $rep = $fiche -> recupFiche();

$categorie= new Categorie();

$template = "../View/affiche.phtml";
require "../View/layout.phtml";