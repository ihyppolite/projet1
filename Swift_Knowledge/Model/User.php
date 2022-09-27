<?php
require "ConnexionBdd.php";

class User{
private $idUser;
private $nom;
private $prenom;

public function getIdUser(){
    return $this->idUser;
}

public function getNom(){
    return $this->nom;
}
public function getPrenom(){
    return $this->prenom;
}

public static function addUser($nom,$prenom,$mail,$mdp){
    $req=ConnexionBdd::getInstance()->prepare("insert into user VALUES(':nom',':prenom',':mail',':mdp',1,1,1)");
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'admin');
        $req->execute();
}

}