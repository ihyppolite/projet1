<?php
require "../Model/FicheModel.php";
require "../Model/Commentaire.php";
require "../Model/User.php";

 

$com= new Commentaire() ;
$commentaires=$com->recupérerToutCommentaire();

$fiche= new FicheModel;
$user = new User();