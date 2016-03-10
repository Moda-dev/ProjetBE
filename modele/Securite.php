<?php 

/**
* Securatisation des variables
*/

namespace modele;

//use GenCookie;

class Securite{
	// Sécurisation des variables GET pour systéme de connexion
	public function secuVarGet($varSecu){
		$tab = array();
		$regle = array("{","}", "(", ")", "'", ";", "\"", "/", "=", "!", "?", "<", "+");
		$regleUrl = array("{","}", "(", ")", "'", ";", "\"", "!", "<", "+");
		// Transformation des caractéres pouvant être dangereux pour la sécuriter de l'application
		foreach ($varSecu as $key => $value) {
			$secu = htmlentities($value);
			$secu = strip_tags($value);
			$secu = str_replace($regleUrl, '', $secu);
			$tab[$key] = $secu;
		}

		return $tab;
	}


	// Sécurisation des variables POST pour systéme de connexion
	public function secuVarPost($varSecu){
		$tab = array();
		$regle = array("{","}", "(", ")", "'", ";", "\"", "/", "=", "!", "?", "<", "+");
		$regleUrl = array("{","}", "(", ")", "'", ";", "\"", "!", "<", "+");
		// Transformation des caractéres pouvant être dangereux pour la sécuriter de l'application		
		foreach ($varSecu as $key => $value) {
			$secu = htmlentities($value);
			$secu = strip_tags($value);
			$secu = str_replace($regleUrl, '', $secu);
			$tab[$key] = $secu;
		}

		return $tab;
	}

	// Sécurisation des variables POST pour les articles
	public function secuVarPostArticle($varSecu){
		foreach ($varSecu as $key => $value) {
			$secu = htmlentities($value);
			$secu = strip_tags($value);
			$tab[$key] = $secu;
		}

		return $tab;
	}

	// Anti brut force
	public function antiBrutForce(){
		// Création cookie et session
	}
}