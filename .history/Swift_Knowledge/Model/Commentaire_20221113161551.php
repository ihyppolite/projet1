<?php
require "ConnexionBdd.php";

class Commentaire
{

    private $idcommentaire;
    private $contenu;


    static function ajoutCommentaire($idfiche, $iduser, $contenu)
    {
        $req = ConnexionBdd::getInstance()->prepare("insert into commentaire (idcommentaire, idfiche, iduser, contenu) values(NULL, ?, ? ,?); ");
        $req->execute(array($idfiche, $iduser, $contenu));
    }

    static function supprimerCommentaire($idcommentaire)
    {
        $req = ConnexionBdd::getInstance()->prepare("delete * from table commentaire where idcommentaire = " + $idcommentaire + ";");
        $req->execute();
    }

    static function modifierContenu($newContenu, $idcommentaire)
    {
        $req = ConnexionBdd::getInstance()->prepare("update commentaire set contenu = " + $newContenu  + " where idcommentaire =" + $idcommentaire + ";");
        $req->execute();
    }

    static function recupérerUnCommentaire($idcommentaire)
    {
        $req = ConnexionBdd::getInstance()->prepare("select * from commentaire where idcommentaire = " + $idcommentaire + ";");
        $req->execute();
        $donnees = $req->fetchAll();
        return $donnees;
    }

    static function recupérerToutCommentaire()
    {
        $req = ConnexionBdd::getInstance()->prepare("SELECT user.NOM, user.PRENOM , commentaire.IDCOMMENTAIRE ,commentaire.CONTENU ,commentaire.IDFICHE ,commentaire.IDCOMMENTAIRE , ficheconnaissance.TITRE FROM commentaire INNER JOIN ficheconnaissance ON commentaire.IDFICHE = ficheconnaissance.IDFICHE INNER JOIN user ON user.IDUSER = commentaire.IDUSER");
        $req->execute();
        $donnees = $req->fetchAll();
        return $donnees;
    }

    //Recherche un commentaire par user
    static function rechercherUnCommentaireParUser($idUser)
    {
        $sql = "select * from commentaire where idUser = " + $idUser;
        $req = ConnexionBdd::getInstance()->prepare($sql);
        $req->execute();
        $donnees = $req->fetchAll();
        return $donnees;
    }
}
