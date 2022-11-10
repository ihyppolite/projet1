<?php

require "../Model/FicheModel.php";


$fiche= new FicheModel;
 $rep = $fiche -> recupFiche();

$template = "../View/affiche.phtml";
require "../View/layout.phtml";