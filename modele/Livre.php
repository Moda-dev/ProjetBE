<?php 

namespace modele;

use \PDO;

class Livre{
	// Ajout d'un livre
	public function addLivre($bdd, $isbn, $titre, $editeur, $annee, $format, $auteur, $type, $categorie){
		try {
			$setPostUser = $bdd->prepare('INSERT INTO `livre`(`isbn_livre`,`titre_livre`,`editeur_livre`,`annee_livre`,`format_livre`,
      `auteur_livre`,`type_livre`,`categorie_livre`) VALUES (:isbn, :titre, :editeur, :annee, :format, :auteur, :type, :categorie);');
      
			$setPostUser->execute(array(
				'isbn' => $isbn,
				'titre' => $titre,
				'editeur' => $editeur,
				'annee' => $annee,
				'format' => $format,
				'auteur' => $auteur,
        'type' => $type,
        'categorie' => $categorie
				));
      
			return true;
      
		} catch (Exception $e) {
			return false;
		}
		
	}
  
	// Mise à jour d'un livre
	public function setLivre($bdd, $isbn, $titre, $editeur, $annee, $format, $auteur, $etat, $type, $categorie){
		try {
			// Requête SQL
			return true;
      
		} catch (Exception $e) {
			return false;
		}
	}
  
  //Récupération de tout les livres
  public function getLivre($bdd){
    try{
      $getLivres = $bdd->query('select * from `livre`');
      
      $getLivres->execute();
      
      // Récupération des livres dans un tableau
			$livres = $getLivres->fetchAll();
      
      return $livres;
      
    }catch(Exception $e){
      return false;
    }
  }
  
  //Récupération du type d'un livre sous forme de tableau
  public function getTypeLivre($bdd){
    try{
      $getType = $bdd->query('select * from `type_livre`');
      
      $getType->execute();
      
			// Récupération des types dans un tableau
			$type = $getType->fetchAll();
      
			return $type;
      
    }catch (Exception $e){
      return false;
    }
  }
  
  //Récupération de la categorie d'un livre sous forme de tableau
  public function getCategorieLivre($bdd){
    try{
      $getCategorie = $bdd->query('select * from `categorie`');
      
      $getCategorie->execute();
      
			// Récupération des categories dans un tableau
			$categorie = $getCategorie->fetchAll();
      
			return $categorie;
      
    }catch (Exception $e){
      return false;
    }
  }

}