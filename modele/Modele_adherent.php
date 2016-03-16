<?php 

/**
* Class de gestion des utilisateurs
*/

namespace modele;
// Chargement des classes
use \modele\Bdd;
use \modele\Adherent;

class Modele_adherent{

	// Varible
	private $nom_adherent;
	private $prenom;
	private $adresse;
	private $mail;
	private $telephone;
	private $association;

	// Méthode d'ajout d'un adhérent
	public function addAdherent($nom, $prenom, $adresse, $mail, $telephone, $association){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$adherent = new Adherent();
		// Méthode addAdherent retourne l'id de l'adherent encore cours d'ajout
		$idAdherent = $adherent->addAdherent($connexionBase, $nom, $prenom, $adresse, $mail, $telephone, $association);

		return $idAdherent;
	}
	// Méthode pour la modification d'un adhérent
	public function setAdherent($nom, $prenom, $adresse, $mail, $telephone, $association){
		//: Implementer
	}

	// Méthode permettant une recherche d'un ou plusierus adhérent
	public function getAdherent($varSearch){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$adherent = new Adherent();
		$adherents = $adherent->getAdherent($connexionBase, $varSearch);

		return $adherents;
	}
}