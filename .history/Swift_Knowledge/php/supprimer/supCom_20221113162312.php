<?php

require "../../Model/Commentaire.php";

$id = $_GET['id'];
var_dump($id);
$com = new Commentaire();

$com->supprimerCommentaire($id);

header('location:../adminpanelFiche.php');
