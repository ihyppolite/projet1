<?php

require "../../Model/Commentaire.php";

session_start();

$com = new Commentaire();

$idfiche=$_POST["idfihe"];
$text=$_POST["text"]
$idUser=$_SESSION["idUser"]=$id["0"];


$com->ajoutCommentaire();
