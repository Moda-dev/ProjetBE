<?php 

namespace modele;
// Chargement des classes
include('../modele/Bdd.php');
include('../modele/Classe.php');

$tabClasse = array(array());
$i = 0;
$option = "";

class Modele_classeEnfant{

	public function getClasse($etablissement){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$classe = new Classe();
		$classes = $classe->getClasse($connexionBase, $etablissement);

		return $classes;
	}
}

// Verification que des données de type post existe
if(isset($_POST) AND !empty($_POST)){
	if(isset($_POST['etablissement']) AND $_POST['etablissement'] != ""){
		$classe = new Modele_classeEnfant();
		$classes = $classe->getClasse($_POST['etablissement']);
		foreach ($classes as $value) {
			$string = "<option>".$value['lib_classe']."<option>";
			$option = $option + $string;
			//$tabClasse[$i][0] = $value['id_classe'];
			//$tabClasse[$i][1] = $value['lib_classe'];
			$i++;
		}
		//echo json_encode($tabClasse);
		echo($option);
	}
}
