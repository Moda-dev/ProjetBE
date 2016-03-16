<?php 

namespace modele;


class Enfant{
	// Ajouter un enfant
	public function addEnfant($bdd, $idParent, $nom, $prenom, $etablissement, $classe){
		try {
			$addEnfant = $bdd->prepare('');
			$addEnfant->execute(array(
				'addEnfant' => $idParent,
				'prenom' => $nom,
				'adresse' => $prenom,
				'mail' => $etablissement,
				'telephone' => $classe
				));
		} catch (Exception $e) {
			return false;
		}
	}
	// Modification d'un enfant
	public function setEnfant($bdd, $idEnfant, $nom, $prenom, $etablissement, $classe){

	}
	// Suppression d'un enfant
	public function delEnfant($bdd, $idEnfant){
		
	}
}