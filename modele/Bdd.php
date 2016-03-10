<?php
 /* Description of bdd
  * @author Jean-Christophe Lassus
  * Connection base de données
  * Retour un objet bdd
 */

namespace modele;

use \PDO;

class Bdd { 
    
    public function connexionBdd() {

        $host = 'localhost';
        $dbname = 'bookoin';
        $login = 'root'; // Modifier en fonction du compte de la BDD
        $mdp = '7kkxk8XW'; // Idem

        try{
            $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.'',
                ''.$login.'',
                ''.$mdp.'');
            $bdd->query("SET NAMES 'utf8'");
        }
        catch (Exception $e){
            die ($e);
        }
        return $bdd;
    }
}


