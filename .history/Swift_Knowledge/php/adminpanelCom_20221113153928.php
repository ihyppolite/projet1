<?php

require "../Model/Commentaire.php";



$set = 'no';

$com = new Commentaire();
$commentaires = $com->recupérerToutCommentaire();



$template = "../View/admin/display_com.phtml";
require "../View/layout.phtml";
