<?php 

/**
* Class de gestion des utilisateurs
*/

namespace modele;
// Chargement des classes
use \modele\Bdd;
use \modele\User;

class Modele_user{

	private $pseudo;
	private $mdp;
	private $idUser;
	private $token;
	// Verification de l'existance d'un compte avec le couple login / mot de passe
	public function checkConnectUser($pseudo, $mdp){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$doaUser = new User();
		// Vérification de la connexion de l'utilisateur
		$existeUser = $doaUser->connectUser($connexionBase, $pseudo, $mdp);
		if($existeUser == "1"){
			$this->pseudo = $pseudo;
			$this->mdp = $mdp;
			return true;
		}
		else{
			return false;
		}

	}

	public function updateToken($pseudo, $mdp, $token){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$doaUser = new User();
		$doaUser->updateToken($connexionBase, $pseudo, $mdp, $token);
	}

	public function getPseudo(){
		return $this->pseudo;
	}
	// Récupération du Token de session
	public function getToken(){
		return $this->token;
	}

	public function getId($pseudo, $mdp){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$daoUser = new User();
		$idUser = $daoUser->getIdUser($connexionBase, $pseudo, $mdp);
		$this->id = $idUser;
		return $idUser;
	}
	
	// Creation de token de session
	public function setToken(){

		$tab = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q',
        'r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');

        $chaine='';
        for ($i=0;$i<11;$i++)
        {
                $offset=rand(0,35);
                $chaine=$chaine . $tab[$offset];
        }

        $this->token = $chaine;
        return $chaine;
	}

	// Récupération si existant du cookie
	public function getCookie(){

	}

	// Methode de création d'un cookie
	public function setCookie($token){
		$time = time() + 7200;
		setcookie ('nekot', $token, time() + $time);

	}

	// Methode qui hache les mdp
	public function hachageMdp($mdp){
        $mdp_hache = sha1($mdp);
        
        return $mdp_hache;
    }
}