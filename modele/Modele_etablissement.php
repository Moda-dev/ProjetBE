<?php 

/**
* Class de gestion des utilisateurs
*/

namespace modele;
// Chargement des classes
use \modele\Bdd;
use \modele\etablissement;

class Modele_etablissement{

	private $idEtablissement;
	private $nomEtablissement;

	public function getAllEtablissement(){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$etablissement = new Etablissement();
		$etablissements = $etablissement->getAllEtablissement($connexionBase);

		return $etablissements;
	}
}