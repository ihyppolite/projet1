<?php

require "../Model/FicheModel.php";


$fiche= new FicheModel;
 $rep = $fiche -> recupFiche();

$template = "../View/home.phtml";
require "../View/layout.phtml";