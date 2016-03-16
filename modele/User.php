<?php 

/*
* Classe permettant la manipulation des données concernant l'utilisateur
*/

namespace modele;

class User{
	// Determine si l'utilsateur existe et donc peut ce connecter
	public function connectUser($bdd, $pseudo, $mdp){
		$VerifUser = $bdd->prepare('SELECT COUNT(*) as compteUser FROM utilisateur WHERE login_utilisateur = :pseudo AND mdp_utilisateur = :mdp');
		$VerifUser->execute(array('pseudo' => $pseudo, 'mdp' => $mdp));
		$reponse = $VerifUser->fetch();
		return $reponse['compteUser'];
	}
	// Ajout ou mise à jour du Token de connexion
	public function updateToken($bdd, $pseudo, $mdp, $token){
		$donnee = $bdd->prepare('UPDATE microblog.utilisateurs SET token = :token WHERE login = :pseudo AND motdepasse = :mdp');
 		$donnee->execute(array(
 			'token' => $token,
 			'pseudo' => $pseudo,
 			'mdp' => $mdp
 			));
	}

	// Récuparation de L'id de l'utilisateur
	public function getIdUser($bdd, $pseudo, $mdp){
		$VerifUser = $bdd->prepare('SELECT id_utilisateur FROM utilisateur WHERE login_utilisateur = :pseudo AND mdp_utilisateur = :mdp');
		$VerifUser->execute(array('pseudo' => $pseudo, 'mdp' => $mdp));
		$reponse = $VerifUser->fetch();
		return $reponse['id_utilisateur'];
	}

	// Vérification de l'existance du compte utilisateur
	public function checkCompteUser($bdd, $pseudo, $idUser){
		$VerifUser = $bdd->prepare('SELECT COUNT(*) as compteUser FROM utilisateur WHERE login_utilisateur = :pseudo AND id_utilisateur = :idUser');
		$VerifUser->execute(array('pseudo' => $pseudo, 'idUser' => $idUser));
		$reponse = $VerifUser->fetch();
		return $reponse['compteUser'];
	}
}