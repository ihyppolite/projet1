<?php
require "/../Model/FicheModel.php";


$set = 'no';
$doc = 'doc';
$fiche = new FicheModel;
$fiches = $fiche->recupFiche();



$template = "../View/admin/display_fiches.phtml";
require "../View/layout.phtml";
