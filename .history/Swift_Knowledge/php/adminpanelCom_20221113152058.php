<?php
require "../Model/FicheModel.php";
require "../Model/Commentaire.php";
require "../Model/User.php";


$set = 'no';

$com = new Commentaire();
$commentaires = $com->recupĂ©rerToutCommentaire();



$template = "../View/admin/display_com.phtml";
require "../View/layout.phtml";
