<?php
 /* Description of bdd
 * @author Jean-Christophe Lassus
  * Connection base de données
 */

namespace modele;

use \PDO;

class Bdd { 
    
    public function bddGestion() {

        $host = 'localhost';
        $dbname = 'gestion';
        $login = 'root';
        $mdp = '7kkxk8XW';

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

    public function bddBadgeAdmin() {

        $host = 'localhost';
        $dbname = 'badgeage';
        $login = 'root';
        $mdp = 'root';

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


