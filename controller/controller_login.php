<?php 

// Changement des class
use \modele\Securite;
use \modele\Modele_user;

// Déclaration des variables
$error = 0;
$message = "";
 
// Verification du l'utilisateur est déjà connecté
if(isset($_SESSION) AND !empty($_SESSION) AND $_SESSION['username'] != "" AND $_SESSION['token'] != ""){
	$modele_user = new Modele_user();
	$VerificationConnexion = $modele_user->checkConnectUser($_SESSION['username'], $_SESSION['idUser']);
	// Verification du couple login et password
	if($VerificationConnexion){
		header('Location: /index.php?page=adherent');
	}
	else{ // Les variables de session ne correspond 
		// Destruction de la session question de sécurité (déconnexion de l'utilisateur)
		session_destroy();
		header('Location: /index.php'); // Rediction à la racine de l'application (la page de login)
	}
}
else{

	// Détermine si un requête de type POST est envoyé à la page
	if(isset($_POST) and !empty($_POST)){
		// Formulaire pas complet
		if(!empty($_POST['login']) AND !empty($_POST['password'])){
			// Sécurisation des variables (Protection contre les injections SQL)
			$securite = new Securite();
			$secuVarPost = $securite->secuVarGet($_POST);
			// Vérification l'existance du compte (Login et Mot de passe)
			$modele_user = new Modele_user();
			$mdpHacher = $modele_user->hachageMdp($secuVarPost['password']);
			// Verification du couple login / mot de passe
			$VerificationConnexion = $modele_user->checkConnectUser($secuVarPost['login'], $mdpHacher);
			// Compte utilisateur existe
			if($VerificationConnexion){
				// Récupération de l'id de l'utilisateur
				$idUser = $modele_user->getId($secuVarPost['login'], $mdpHacher);
				//afin de les utiliser dans les pages de l'application
				$_SESSION['login'] = $secuVarPost['login'];
				$_SESSION['idUser'] = $idUser;
				header('Location: /bookoin/index.php?page=adherent');
			}
			else{
				// Creation message d'erreur
				$error = 1;
				$message = "Login ou mot de passe incorrecte.";
			}
			
		}
		else{
			// Creation message d'erreur
			$error = 1;
			$message = "Veuillez remplir le formulaire de connexion.";
		}
	}
}


// Récupération de le vue
include('vue/vue_login.php');
?>
