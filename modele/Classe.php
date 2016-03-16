<?php 

namespace modele;

class Classe{

	// Méthode qui revoie l'ensemble des classes disponible pour un établissement
	public function getClasse($bdd, $etablissement){
		$VerifUser = $bdd->prepare('SELECT classe.id_classe, classe.lib_classe FROM `classes_etab`  INNER JOIN classe ON classes_etab.id_classe = classe.id_classe WHERE classes_etab.id_etablissement = :etablissement');
		$VerifUser->execute(array('etablissement' => $etablissement));
		$reponse = $VerifUser->fetchAll();
		return $reponse;
	}
}