<?php 

// Changement des class
use \modele\Securite;
use \modele\Modele_adherent;
use \modele\Modele_etablissement;

// Variable 
$error = 0;
$message = "";

//var_dump($_POST);

// Récupération des données pour le formulaire d'ajout d'enfant
// Les établissements
$etablissement = new Modele_etablissement();
$etablissements = $etablissement->getAllEtablissement();
//var_dump($etablissements);
// Les classes en fonction de l'établissement choisi en jQuery



if(isset($_POST) AND !empty($_POST)){
	// Sécurisation de la variable POST
	$securite = new Securite();
	$secuVarPost = $securite->secuVarGet($_POST);
	if(isset($_POST['name-parent']) AND $_POST['name-parent'] != ""){
		// Stockage de la recherche dans une variable de session afin de la réutiliser
		$_SESSION['recherche'] = $secuVarPost['name-parent'];
		$adherent = new Modele_adherent();
		// Récupération du resultat de la recherche
		$adherents = $adherent->getAdherent($secuVarPost['name-parent']);

	}
	elseif(isset($_SESSION) AND !empty($_SESSION)){
		if($_SESSION['recherche'] != ""){
			var_dump($_SESSION['recherche']);
			$adherent = new Modele_adherent();
			// Récupération du resultat de la recherche
			$adherents = $adherent->getAdherent($_SESSION['recherche']);
		}
	}
	else{
		$error = 1;
		$message = "Veuillez entrer une partie du prenom ou nom du parent";
	}
	if(isset($secuVarPost['nom-enfant']) AND isset($secuVarPost['prenom-enfant']) AND isset($secuVarPost['etablissement']) AND isset($secuVarPost['classe']) ANd isset($secuVarPost['classe']) AND $secuVarPost['nom-enfant'] != "" AND $secuVarPost['prenom-enfant'] != "" AND $secuVarPost['etablissement'] AND $secuVarPost['classe'] AND $secuVarPost['id-parent']){

	}
	else{
		$error = 1;
		$message = "Formulaire n'est pas complet, veuillez remplir tous les champs";
	}
	
}


include('vue/vue_enfant.php');