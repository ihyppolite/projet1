<?php

require "../Model/Categorie.php";


if(!empty($_SESSION["idUser"]))
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





