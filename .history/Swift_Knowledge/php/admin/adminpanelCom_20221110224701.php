<?php
require "../Model/FicheModel.php";

require "../Model/User.php";

$fiche= new FicheModel;
 

$com= new Commentaire() ;
$commentaire=$com->recupĂ©rerToutCommentaire()

$user = new User();