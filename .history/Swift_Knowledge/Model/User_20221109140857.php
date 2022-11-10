<?php
require "ConnexionBdd.php";

class User{
private $idUser;
private $nom;
private $prenom;
private $mail;
private $mdp;
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
        $req=ConnexionBdd::getInstance()->prepare("INSERT INTO user VALUES(NULL,?,?,?,md5(?),1,1,1)");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'admin');
        $req->execute(array($nom,$prenom,$mail,$mdp));
        return true;
    }

    public static function searchUser($mail,$mdp){
        $req=ConnexionBdd::getInstance()->prepare("select * from user where mail=? and mdp=md5(?)");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'admin');
        $req->execute(array($mail,$mdp));
        $leResultat=$req->fetchAll();
        $nb_lignes=count($leResultat);
        if($nb_lignes==0){
            $rep=false;
        }
        else{
            $rep=true;
        }
        return $rep;
    }
}
