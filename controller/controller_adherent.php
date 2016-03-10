<?php 

// Changement des class
use \modele\Securite;
use \modele\Modele_user;

// Déclaration des variables
$error = 0;
$message = "";

// Détermine si un requête de type POST est envoyé à la page
if(isset($_POST) and !empty($_POST)){
	if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['adresse']) AND isset($_POST['telephone']) AND isset($_POST['mail'])
		AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['adresse']) AND !empty($_POST['telephone']) AND  !empty($_POST['mail'])){
		$securite = new Securite();
		$secuVarPost = $securite->secuVarGet($_POST);
		var_dump($secuVarPost);
	}
}

include('vue/vue_adherent.php');

 ?>