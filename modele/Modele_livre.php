<?php 


namespace modele;
// Chargement des classes
use \modele\Bdd;
use \modele\Livre;

class Modele_livre{
	
	public function getLivre(){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$livre = new Livre();
		$livres = $livre->getLivre($connexionBase);

		return $livres;
	}	
}