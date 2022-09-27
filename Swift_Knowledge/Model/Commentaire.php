<?php
require "ConnexionBdd.php";

class Commentaire
{

    private $idcommentaire;
    private $contenu;


    static function ajoutCommentaire($idcommentaire, $idfiche, $iduser, $contenu)
    {
        $req = ConnexionBdd::getInstance()->prepare("insert into commentaire (idcommentaire, idfiche, iduser, contenu) values(NULL, ?, ? ,?); ");
        $req->execute();
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
}
