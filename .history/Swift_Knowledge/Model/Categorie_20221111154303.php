<?php
require "ConnexionBdd.php";

namespace Categorie;

class Categorie
{

    private $idcat;
    private $titre;

    public function getIdCat()
    {
        return $this->idcat;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($newtitre)
    {
        $this->titre = $newtitre;
    }


    static function afficherEnsembleDesCategories()
    {
        $req = ConnexionBdd::getInstance()->prepare("select * from categorie ");
        $req->execute();
        $donnees = $req->fetchAll();
        return $donnees;
    }


    static function recupererUneCategory($idcat)
    {
        $req = ConnexionBdd::getInstance()->prepare("select titre from categorie where idcat= ? ");
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'admin');
        $req->execute(array($idcat));
        $leResultat = $req->fetchAll();
        return $leResultat;
    }

    static function ajoutCategorie($idcat, $titre)
    {
        $req = ConnexionBdd::getInstance()->prepare("insert into categorie values(':idcat',':titre'");
        $req->execute();
    }

    static function supprimerCategorie($idcat)
    {
        $req = ConnexionBdd::getInstance()->prepare("delete from table categorie where idcat=:idcat");
        $req->execute();
    }

    static function modifierTitre($newTitre, $idcat)
    {
        $req = ConnexionBdd::getInstance()->prepare("update categorie set titre=':newTitre' where idcat=:idcat");
        $req->execute();
    }
}
