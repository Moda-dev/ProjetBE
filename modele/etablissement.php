<?php 

namespace modele;


class Etablissement{

	public function getAllEtablissement($bdd){
		$allEtablissement = $bdd->query('SELECT * FROM etablissement');
		$allEtablissement->execute();
		$reponse = $allEtablissement->fetchAll();
		return $reponse;
	}
}