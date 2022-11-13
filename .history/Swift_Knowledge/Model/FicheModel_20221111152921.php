<?php

class FicheModel
{

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

    function recupFiche()
    {
        $req = "select * from ficheconnaissance ";
        $req = ConnexionBdd::getInstance()->prepare($req);
        $req->fetch(PDO::FETCH_ASSOC);
    }

    function recupNom($id)
    {
        $requete = ConnexionBdd::getInstance()->prepare("SELECT TITRE FROM ficheconnaissance WHERE IDFICHE = ? ");
        $requete->execute(array($id));
        $donnees = $requete->fetchAll();
        return $donnees;
    }

    //fonction d'ajout d'une fiche
    function ajoutfiche($idcat, $iduser, $titre, $textfiche)
    {
        $requete = ConnexionBdd::getInstance()->prepare("insert into ficheconnaissance (IDFICHE,IDCAT ,IDUSER,titre, date, textefiche) VALUES (NULL, ?, ?, ?, NOW(),? );");
        $requete->execute(array($idcat, $iduser, $titre, $textfiche));
    }


    //fonction de modification du titre d'une fiche
    public function modiftitre($titre, $idfiche)
    {

        $sql = "update ficheconnaissance set titre = " + $titre + " where idfiche = " + $idfiche;
        $req = ConnexionBdd::getInstance()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
    }

    //fonction de modification du titre d'une fiche
    public function modifdate($date, $idfiche)
    {
        $sql = "update ficheconnaissance date = " + $date + " where idfiche = " + $idfiche;
        $req = ConnexionBdd::getInstance()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
    }

    //fonction de modification du titre d'une fiche
    public function modiftextefiche($textefiche, $idfiche)
    {
        $sql = "update ficheconnaissance date = " + $textefiche + " where idfiche = " + $idfiche;
        $req = ConnexionBdd::getInstance()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
    }

    //fonction de supression d'une fiche
    public function suppfiche($titre)
    {
        $sql = "delete from ficheconnaissance where titre == " + $titre;
        $req = ConnexionBdd::getInstance()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '');
        $req->execute();
    }

    //fonction d'ajout d'une fiche
    public static function trouveUneFiche($recherche, $categorie)
    {
        $requete = ConnexionBdd::getInstance()->prepare("SELECT * FROM ficheconnaissance WHERE TITRE LIKE ? AND IDCAT = ?");
        $requete->execute(array($recherche, $categorie));
        $donnees = $requete->fetchAll();
        return $donnees;
    }

    //fonction d'ajout d'une fiche
    function trouveUneFicheParId($id)
    {
        $requete = ConnexionBdd::getInstance()->prepare("SELECT * FROM ficheconnaissance WHERE IDUSER = ?");
        $requete->execute(array($id));
        $donnees = $requete->fetchAll();
        return $donnees;
    }
}
