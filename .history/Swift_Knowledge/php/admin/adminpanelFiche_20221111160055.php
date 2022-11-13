<?php
require "../../Model/FicheModel.php";


$set = 'no';
$fiche = new FicheModel;
$rep = $fiche->recupFiche();



$template = "../../View/admin/display_fiches.phtml";
require "../../View/layout.phtml";
