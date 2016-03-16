<?php

/**
* Class de gestion des livres
*/

namespace modele;
// Chargement des classes
use \modele\Bdd;
use \modele\Livre;

class Modele_livre{
	// Méthode d'ajout d'un adhérent
	public function addLivre($isbn, $titre, $editeur, $annee, $format, $auteur, $type, $categorie){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$livre = new Livre();
		// Méthode addLivre retourne l'isbn du livre encours d'ajout
		$isbn = $livre->addLivre($connexionBase, $isbn, $titre, $editeur, $annee, $format, $auteur, $type, $categorie);

		return $isbn;
	}
  
	// Méthode pour la modification d'un livre
	public function setLivre($isbn, $titre, $editeur, $annee, $format, $auteur, $type, $categorie){
		//: Implementer
	}
  
  //Méthode pour la récupération de tout les livres
  public function getLivre(){
    $bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$livre = new Livre();
    //Méthode getLivre retourne la liste de tous les livres
    $livres = $livre->getLivre($connexionBase);
    
    return $livres;
  }
  
  // Méthode pour la récupération d'un type de livre
	public function getTypeLivre(){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$livre = new Livre();
    // Méthode getTypeLivre retourne le type du livre sous forme de tableau
    $type = $livre->getTypeLivre($connexionBase);
    
    return $type;
	}
  
  // Méthode pour la récupération de la categorie d'un livre
	public function getCategorieLivre(){
		$bdd = new Bdd();
		$connexionBase = $bdd->connexionBdd();
		$livre = new Livre();
    // Méthode getCategorieLivre retourne la categorie du livre sous forme de tableau
    $categorie = $livre->getCategorieLivre($connexionBase);
    
    return $categorie;
	}
}