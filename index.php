<?php 
// Démarrage de la session
session_start();
// Autoloader de composer
require "vendor/autoload.php";

// Changement des class
use \modele\Securite;



// Securisation des variables
$securite = new Securite();
$secuVarUrl = $securite->secuVarGet($_GET);

// Ajout de la vue header
include "vue/vue_header.php";

// Liste des pages autorisées
$listeBlanche = array('adherent', 'enfant', 'livre', 'login', 'compta', 'admin', 'dossier', 'deconnexion', 'document','gestion_livre');
if(!empty($secuVarUrl['page']) AND isset($secuVarUrl['page']) AND $secuVarUrl['page'] != 'index'){
    // Securisation de la variable
    $page = $secuVarUrl['page'];
    // Recherche de la page dans le dosier controleur
    if(in_array($page, $listeBlanche) AND file_exists('controller/controller_'.$page.'.php')){
        include('controller/controller_'.$page.'.php');
    }
    else{
        // Page introuvée 
        include('controller/controller_404.php');
    }
}
else{
    // Page par défaut
    include('controller/controller_login.php');
}
// Ajout de la vue footer
include "vue/vue_footer.php";



