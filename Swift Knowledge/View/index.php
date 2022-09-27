<?php
require('../Model/ConnexionBdd.php'); 

try{
    $connex= ConnexionBdd::getInstance();
    echo"conexion réussie";
}

catch (PDOException $e){

    throw new Exception("Connexion à la base de données impossible");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <p>hello world </p>
</body>

</html>


