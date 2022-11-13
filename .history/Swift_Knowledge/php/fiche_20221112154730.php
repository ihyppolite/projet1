<?php
require "../Model/FicheModel.php";


$idfiche = $_GET['fiche'];

$fiche = new FicheModel;

$notreFiche = $fiche->trouveUneFicheParId($idfiche);

$noscommentaires = $fiche->trouvelesCom($idfiche);


var_dump($noscommentaires);

var_dump($notreFiche);
