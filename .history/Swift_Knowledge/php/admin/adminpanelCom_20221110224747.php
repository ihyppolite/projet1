<?php
require "../Model/FicheModel.php";
require "../Model/Commentaire.php";
require "../Model/User.php";

 

$com= new Commentaire() ;
$commentaire=$com->recupĂ©rerToutCommentaire();

$fiche= new FicheModel;
$user = new User();