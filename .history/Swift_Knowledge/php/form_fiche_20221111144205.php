<?php

require "../Model/Categorie.php";

session_start();


var_dump($_SESSION);
if(isset($_SESSION["idUser"]))
{
  //  header('location:login.php');

}
 else
 {
    $cat = new Categorie;

$categories = $cat ->afficherEnsembleDesCategories();

$template = "../View/form/form_fiche.phtml";
require "../View/layout.phtml";
 }




