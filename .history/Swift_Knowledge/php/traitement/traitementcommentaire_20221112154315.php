<?php

require "../../Model/Commentaire.php";
var_dump($_POST);
session_start();

$com = new Commentaire();

$idfiche = $_POST["idfiche"];
$text = $_POST["text"];
$id = $_SESSION["idUser"]['IDUSER'];


$com->ajoutCommentaire($idfiche, $id, $text);

header("location:fiche.php?subject={$idfiche}");
