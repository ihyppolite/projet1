<?php
require('./Model/ConnexionBdd.php'); 
$connex= new ConnexionBdd;

try{
    $connex->getInstance();
}

catch (PDOException $e){

    throw new Exception("Connexion à la base de données impossible");
}

?>


