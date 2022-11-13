<?php

require "../Model/Categorie.php";



$cat = new Categorie;

$categories = $cat ->afficherEnsembleDesCategories();

$template = "../View/form/form_fiche.phtml";
require "../View/layout.phtml";

// else
// {
//     //header('location:login.php');
// }





