<?php 
/*
* Controller permettant de gérer l'ajout d'un nouvel adhérent
*/

// Changement des class
use \modele\Securite;
use \modele\Modele_adherent;
use \modele\Modele_user;

// Déclaration des variables
$success = 0;
$error = 0;
$message = "";

// Vérification si l'utilisateur est connecté
if(isset($_SESSION['login']) AND isset($_SESSION['idUser']) AND !empty($_SESSION['login']) AND !empty($_SESSION['idUser'])){
	// Vérification l'existance du compte (Login et Mot de passe)
	$modele_user = new Modele_user();
	// Verification du couple login / idUser
	$VerificationConnexion = $modele_user->checkCompteUser($_SESSION['login'], $_SESSION['idUser']);
	if(isset($VerificationConnexion) AND !empty($VerificationConnexion) AND $VerificationConnexion == "1"){
		// Détermine si un requête de type POST est envoyé à la page
		if(isset($_POST) and !empty($_POST)){
			if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['adresse']) AND isset($_POST['telephone']) AND isset($_POST['mail']) AND isset($_POST['association'])
				AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['adresse']) AND !empty($_POST['telephone']) AND !empty($_POST['mail']) AND !empty($_POST['association'])){
				$securite = new Securite();
				$secuVarPost = $securite->secuVarGet($_POST);
				// Ajout de l'adhérent
				$adherent = new Modele_adherent();
				// Méthode addAdherent ajout l'adhérent et retourne sont id.
				$idAdherent = $adherent->addAdherent($secuVarPost['nom'], $secuVarPost['prenom'], $secuVarPost['adresse'], $secuVarPost['mail'], $secuVarPost['telephone'], $secuVarPost['association']); 
				//var_dump($idAdherent);
				$success = 1;
			}
			else{
				$error = 1;
				$message = "Veuillez remplir tout les champs du formulaire.";
			}
		}
		include('vue/vue_adherent.php');
	}
	else{
		header('Location: index.php');
		session_destroy();
	}	
}
else{
	header('Location: index.php');
	session_destroy();
}



