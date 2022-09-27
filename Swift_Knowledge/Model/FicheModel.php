<?php
<<<<<<< HEAD
class FicheModel
{

=======
require "ConnexionBdd.php"; 
class FicheModel{
    
>>>>>>> af83b8de5f13c7f0b3e852d99d26367d510210d0
    private $idfiche;
    private $titre;
    private $date;
    private $textfiche;


    function getId()
    {
        return $this->id;
    }

    function getTitre()
    {
        return $this->titre;
    }

    function getdate()
    {
        return $this->date;
    }

    function getTexte()
    {
        return $this->textfiche;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setTitre($titre)
    {
        $this->titre = $titre;
    }

    function setDate($date)
    {
        $this->date = $date;
    }

    function setTexte($textefiche)
    {
        $this->textefiche = $textefiche;
    }

    function afficherEnsembleDesFiche()
    {
        $sql = "select * from ficheconnaissance ";
        $req = ConnexionBdd::getInstance()->prepare($sql);
        $req->execute();
        $donnees = $req->fetchAll();
        return $donnees;
    }


    //fonction d'ajout d'une fiche
<<<<<<< HEAD
    function ajoutfiche($titre, $date, $textfiche, $id)
    {
        
        $req = ConnexionBdd::getInstance()->prepare("insert into ficheconnaissance (titre, date, textefiche) values " + $titre + " ," + $date + " ," + $textfiche;);
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
=======
    function ajoutfiche ($idcat ,$iduser ,$titre, $textfiche){
        $requete = ConnexionBdd::getInstance()->prepare("insert into ficheconnaissance (IDFICHE,IDCAT ,IDUSER,titre, date, textefiche) VALUES (NULL, ?, ?, ?, NOW(),? );");
        $requete->execute(array($idcat ,$iduser ,$titre, $textfiche));
    
        
    } 


    //fonction de modification du titre d'une fiche
    function modiftitre ($titre, $idfiche){

        $sql = "update ficheconnaissance set titre = " + $titre + " where idfiche = " + $idfiche ;
        $req= ConnexionBdd::getInstance()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, '');
        $req->execute();
        
        
    } 

    //fonction de modification du titre d'une fiche
    function modifdate ($date, $idfiche){
        $sql = "update ficheconnaissance date = " + $date + " where idfiche = " + $idfiche ;
        $req= ConnexionBdd::getInstance()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, '');
        $req->execute();
        
>>>>>>> af83b8de5f13c7f0b3e852d99d26367d510210d0
    }

    //fonction de modification du titre d'une fiche
    function modiftitre($titre, $idfiche)
    {

        $sql = "update ficheconnaissance set titre = " + $titre + " where idfiche = " + $idfiche;
        $req = ConnexionBdd::getInstance()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
    }

    //fonction de modification du titre d'une fiche
    function modifdate($date, $idfiche)
    {
        $req = ConnexionBdd::getInstance()->prepare("update ficheconnaissance date =:date  where idfiche =:idfiche");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
    }

    //fonction de modification du titre d'une fiche
    function modiftextefiche($textefiche, $idfiche)
    {
        $req = ConnexionBdd::getInstance()->prepare("update ficheconnaissance date =:textefiche where idfiche =:idfiche");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
    }

    //fonction de supression d'une fiche
    function suppfiche($titre)
    {
        $req = ConnexionBdd::getInstance()->prepare("delete from ficheconnaissance where titre =:titre");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
    }
}
