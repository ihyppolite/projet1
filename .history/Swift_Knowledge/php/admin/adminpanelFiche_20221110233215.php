<?php
require "../Model/FicheModel.php";
require "../Model/Categorie.php";
require "../Model/User.php";

$fiche= new FicheModel;
 $rep = $fiche -> recupFiche();

$categorie= new Categorie();

$user = new User();

$template = "../../admin/View/display_fiches.phtml";
require "../../View/layout.phtml";