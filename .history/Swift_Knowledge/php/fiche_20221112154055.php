<?php
require '../Model/FicheModel';


$idfiche = $_GET['fiche'];

$fiche = new FicheModel;

$notreFiche = $fiche->trouveUneFicheParId($idfiche);

$noscommentaires = $fiche -> trouvelesCom($idfiche)

