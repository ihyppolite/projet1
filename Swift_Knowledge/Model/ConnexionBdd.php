<?php
class ConnexionBdd
{

private static $serveur='mysql:host=localhost';
private static $bdd='dbname=bdd_sk'; 
private static $user='root' ; 
private static $mdp='' ;
private static $monPdo;
private static $unPdo = null;

//	Constructeur privé, crée l'instance de PDO qui sera sollicitée
//	pour toutes les méthodes de la classe
private function __construct()
{
    ConnexionBdd::$unPdo = new PDO(ConnexionBdd::$serveur.';'.ConnexionBdd::$bdd, ConnexionBdd::$user, ConnexionBdd::$mdp);
    ConnexionBdd::$unPdo->query("SET CHARACTER SET utf8");
    ConnexionBdd::$unPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
public function __destruct()
{ 
    ConnexionBdd::$unPdo = null;
}
/**
*	Fonction statique qui cree l'unique instance de la classe
* Appel : $instanceMonPdo = MonPdo::getMonPdo();
*	@return l'unique objet de la classe MonPdo
*/
public static function getInstance()
{
    if(self::$unPdo == null)
    {
        self::$monPdo= new ConnexionBdd();
    }
    return self::$unPdo;
}

}
?>