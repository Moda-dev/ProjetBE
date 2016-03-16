<?php

namespace modele;
// Chargement des classes
//include('../modele/Bdd.php');
//include('../modele/Classe.php');
use \modele\Bdd;
use \modele\Classe;

class Modele_classeEnfant{

	public function getClasse($etablissement){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$classe = new Classe();
		$classes = $classe->getClasse($connexionBase, $etablissement);

		return $classes;
	}
}