<?php 
/*
* Controller permettant de gérer l'ajout d'un nouveau livre
*/

// Changement des class
use \modele\Securite;
use \modele\Modele_livre;
use \modele\Modele_user;


// Vérification si l'utilisateur est connecté
if(isset($_SESSION['login']) AND isset($_SESSION['idUser']) AND !empty($_SESSION['login']) AND !empty($_SESSION['idUser'])){
	// Vérification l'existance du compte (Login et Mot de passe)
	$modele_user = new Modele_user();
	// Verification du couple login / idUser
	$VerificationConnexion = $modele_user->checkCompteUser($_SESSION['login'], $_SESSION['idUser']);
	if(isset($VerificationConnexion) AND !empty($VerificationConnexion) AND $VerificationConnexion == "1"){
    
    // Ajout de livre
    $livre = new Modele_livre();
    //Methode getLivre recupération des livres
    $livres = $livre->getLivre();
		include('vue/vue_livre.php');
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