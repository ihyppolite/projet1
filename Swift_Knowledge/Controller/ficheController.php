<?php
require "./Model/FicheModel.php";

$title=$_POST["title"];
$content=$_POST["content"];
$categorie=$_POST["idCategorie"];
$choix=$_GET["choix"];

switch($choix){

    case "ajoutFiche":
        include "../php/add_fiche.php";
        break;

    case "affichageUneFiche":
        include "../php/recherche.php";
        break;
}

