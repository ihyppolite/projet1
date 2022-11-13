<?php
require "../../Model/FicheModel.php";
require "../../Model/Categorie.php";
require "../../Model/User.php";

$set = 'no';
$fiche = new FicheModel;
$rep = $fiche->recupFiche();



$template = "../../View/admin/display_fiches.phtml";
require "../../View/layout.phtml";
