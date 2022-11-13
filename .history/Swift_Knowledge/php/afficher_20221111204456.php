<?php

require "../Model/FicheModel.php";




$set = 'no';

$fiche = new FicheModel;
$fiches = $fiche->recupFiche();




$template = "../View/affiche.phtml";
require "../View/layout.phtml";
