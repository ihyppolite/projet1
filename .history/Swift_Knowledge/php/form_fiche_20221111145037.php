<?php

require "../Model/Categorie.php";

session_start();

$_SESSION["set"] = 'set';


if (!isset($_SESSION["idUser"])) {
    header('location:login.php');
} else {
    $cat = new Categorie;

    $categories = $cat->afficherEnsembleDesCategories();

    $template = "../View/form/form_fiche.phtml";
    require "../View/layout.phtml";
}
