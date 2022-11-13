<?php

require "../../Model/Commentaire.php";

session_start();

$com = new Commentaire();

$idfiche = $_POST["idfihe"];
$text = $_POST["text"];
$id = $_SESSION["idUser"]['IDUSER'];


$com->ajoutCommentaire($idfiche, $id, $text);
