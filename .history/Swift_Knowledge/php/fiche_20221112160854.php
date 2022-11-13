<?php
require "../Model/FicheModel.php";


$set = 'no';
$idfiche = $_GET['fiche'];


$fiche = new FicheModel;

$notreFiche = $fiche->trouveUneFicheParId($idfiche);

$noscommentaires = $fiche->trouvelesCom($idfiche);


$template = "../View/fiche.phtml";
require "../View/layout.phtml";
