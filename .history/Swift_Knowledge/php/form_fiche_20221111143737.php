<?php

require "../Model/Categorie.php";


if(empty($_SESSION["idUser"]))
{
    header('location:login.php');

}
 else
 {
    $cat = new Categorie;

$categories = $cat ->afficherEnsembleDesCategories();

$template = "../View/form/form_fiche.phtml";
require "../View/layout.phtml";
 }





