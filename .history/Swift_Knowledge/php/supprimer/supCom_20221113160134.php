<?php

require "../../Model/Commentaire.php";

$id = $_GET['id'];

$com = new Commentaire();

$com->supprimerCommentaire($id);
