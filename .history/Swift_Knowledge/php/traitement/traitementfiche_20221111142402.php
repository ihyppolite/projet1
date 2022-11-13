<?php

session_start();

require "../../Model/FicheModel.php";

$title=$_POST["titre"];
$content=$_POST["content"];
$categorie=$_POST["idCategorie"];
$idUser=$_SESSION["idUser"];




$ficheModel = new FicheModel();
$ficheModel->ajoutfiche($categorie,$idUser,$title,$content);


header('Location: ../home.php');