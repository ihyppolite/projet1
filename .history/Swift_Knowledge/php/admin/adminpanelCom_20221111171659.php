<?php
require "../../Model/FicheModel.php";
require "../../Model/Commentaire.php";
require "../../Model/User.php";


$set = 'no';
$doc = 'doc';
$com = new Commentaire();
$commentaires = $com->recupérerToutCommentaire();

$fiche = new FicheModel;
$user = new User();

$template = "../../View/admin/display_com.phtml";
require "../../View/layout.phtml";
