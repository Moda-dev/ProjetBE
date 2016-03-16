<?php 
/*
* Controller permettant de gérer l'ajout d'un nouveau livre
*/

// Changement des class
use \modele\Securite;
use \modele\Modele_livre;
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
    // Ajout de livre
    $livre = new Modele_livre();
    $types = $livre->getTypeLivre();
    $categories = $livre->getCategorieLivre();
    
    // Détermine si un requête de type POST est envoyé à la page
		if(isset($_POST) and !empty($_POST)){
			if(isset($_POST['isbn']) AND isset($_POST['titre']) AND isset($_POST['editeur']) AND isset($_POST['annee']) AND isset($_POST['format']) AND isset($_POST['auteur']) AND isset($_POST['type']) AND isset($_POST['categorie'])
				AND !empty($_POST['isbn']) AND !empty($_POST['titre']) AND !empty($_POST['editeur']) AND !empty($_POST['annee']) AND !empty($_POST['auteur']) AND !empty($_POST['type']) AND !empty($_POST['categorie'])){
				$securite = new Securite();
				$secuVarPost = $securite->secuVarGet($_POST);
				
				// Méthode addLivre ajout du livre et retourne son isbn.
				$isbn = $livre->addLivre($secuVarPost['isbn'], $secuVarPost['titre'], $secuVarPost['editeur'], $secuVarPost['annee'], $secuVarPost['format'], $secuVarPost['auteur'], $secuVarPost['type'], $secuVarPost['categorie']);
				$success = 1;
			}
			else{
				$error = 1;
				$message = "Veuillez remplir tout les champs du formulaire.";
			}
		}
		include('vue/vue_admin.php');
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