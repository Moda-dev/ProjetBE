<?php 

namespace modele;

use \PDO;

class Adherent{
	// Ajout d'un adhérent
	public function addAdherent($bdd, $nom, $prenom, $adresse, $mail, $telephone, $association){
		try {
			$setPostUser = $bdd->prepare('INSERT INTO `ADHERENT`(`nom_adherent`, `prenom_adherent`, `adr_adherent`, `email_adherent`, `tel_adherent`, `asso_adherent`) VALUES (:nom, :prenom, :adresse, :mail, :telephone, :association);');
			$setPostUser->execute(array(
				'nom' => $nom,
				'prenom' => $prenom,
				'adresse' => $adresse,
				'mail' => $mail,
				'telephone' => $telephone,
				'association' => $association
				));
			// Récupération de l'id de l'adhérent
			$idAdherent = $setPostUser->fetch(PDO::FETCH_ASSOC);
			return $idAdherent;
		} catch (Exception $e) {
			return false;
		}
		
	}
	// Mise à jour d'un adhérent
	public function setAdherent($bdd, $nom, $prenom, $adresse, $mail, $telephone, $association){
		try {
			// Requête SQL
			return true;
		} catch (Exception $e) {
			return false;
		}
	}
}