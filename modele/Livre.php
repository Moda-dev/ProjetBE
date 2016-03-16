<?php 


namespace modele;

class Livre{

	public function getLivre($bdd){
		$allLivre = $bdd->query('SELECT * FROM livre');
		$allLivre->execute();
		$reponse = $allLivre->fetchAll();
		return $reponse;
	}

}