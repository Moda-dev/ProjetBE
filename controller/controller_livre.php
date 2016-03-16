<?php 
// Changement des class
use \modele\Modele_livre;

//Recherche de la liste de livre
$livre = new Modele_livre();
$livres = $livre->getLivre();

include('vue/vue_livre.php');