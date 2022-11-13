<?php

require "../../Model/FicheModel.php";

$id = $_GET['id'];

$fiche = new FicheModel();

$fiche->suppfiche($id);

header('location:../adminpanelFiche.php');
