<?php

require "../Model/Categorie.php";

var_dump($_SESSION["idUser"]);
if(!empty( $_SESSION["idUser"]))
{
$cat = new Categorie;

$categories = $cat ->afficherEnsembleDesCategories();

$template = "../View/form/form_fiche.phtml";
require "../View/layout.phtml";
}
else
{
    header('location:login.php');
}





