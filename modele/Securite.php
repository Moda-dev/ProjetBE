<?php 

/**
* Securatisation des variables
*/

namespace modele;

//use GenCookie;

class Securite{

	// Sécurisation des variables POST
	public function secuVar($varSecu){
		$tab = array();
		$regle = array("{","}", "(", ")", "'", ";", "\"", "/", "=", "!", "?", "<", "+");

		if(is_array($varSecu)){
			foreach ($varSecu as $key => $value) {
			$secu = htmlentities($value);
			$secu = strip_tags($value);
			$secu = str_replace($regle, '', $secu);
			$tab[$key] = $secu;
			}

			return $tab;
		}

		if(is_string($varSecu)){
			$regle = array("{","}", "(", ")", "'", ";", "\"", "=", "!", "?", "<");

			$varSecu = htmlentities($varSecu);
			$varSecu = strip_tags($varSecu);
			$varSecu = str_replace($regle, '', $varSecu);

			return $varSecu;
		}

		
	}

	// Anti brut force
	public function antiBrutForce(){
		// Création cookie et session
	}

	// Sécurisation des variables GET
	public function secuVarGet($varSecu){
		$tab = array();
		$regle = array("{","}", "(", ")", "'", ";", "\"", "=", "!", "?", "<");

		$varSecu = htmlentities($varSecu);
		$varSecu = strip_tags($varSecu);
		$varSecu = str_replace($regle, '', $varSecu);

		return $varSecu;
	}
}

/*class gestionSecurite{

	// Sécurisation des variables POST
	public function secuVarPost($varSecu){
		$tab = array();
		$regle = array("{","}", "(", ")", "'", ";", "\"", "=", "!", "?", "<");

		foreach ($varSecu as $key => $value) {
			$secu = htmlentities($value);
			$secu = strip_tags($value);
			$secu = str_replace($regle, '', $secu);
			$tab[$key] = $secu;
		}

		return $tab;
	}

	// Sécurisation des variables POST
	public function secuVarPostUnique($varSecu){
		$varSecu = (string) $varSecu;

		$regle = array("{","}", "(", ")", "'", ";", "\"", "=", "!", "?", "<");

		$secu = htmlentities($varSecu);
		$secu = strip_tags($secu);
		$secu = str_replace($regle, '', $secu);
		$tab = $secu;

		return $tab;
	}


	// Sécurisation des variables GET
	public function secuVarGet($varSecu){
		$tab = array();
		$regle = array("{","}", "(", ")", "'", ";", "\"", "=", "!", "?", "<");

		$varSecu = htmlentities($varSecu);
		$varSecu = strip_tags($varSecu);
		$varSecu = str_replace($regle, '', $varSecu);

		return $varSecu;
	}

	//Hachage de variable
	/*public function hachage($varHachage){

	}

	// Creation de token pour le vole de session
	public function token(){

		$tab = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q',
        'r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');

        $chaine='';
        for ($i=0;$i<25;$i++)
        {
                $offset=rand(0,35);
                $chaine=$chaine . $tab[$offset];
        }

        return $chaine;
	}

	// Gestion du navigateur: nom, version; gestion OS: nom
	public function getUserBrowser(){
		$browser = get_browser(null, true);
		$tab = array();

		$tab[] = $browser['platform_description'];
		$tab[] = $browser['browser'];

		return $tab;
	}

	// Methode qui met à jour les informations 
	// Utilisation de valeur de retour de getUserBrower
	public function setUserBrower(){

	}

	// Methode qui crée un cookie
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
?>
*/