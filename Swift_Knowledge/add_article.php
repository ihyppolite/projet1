<?php



require "./Model/FicheModel.php";

$title=$_POST["title"];
$content=$_POST["content"];
$categorie=$_POST["idCategorie"];




$ficheModel = new FicheModel();
$ficheModel->ajoutfiche($categorie,1,$title,$content);


header('Location: home.php');