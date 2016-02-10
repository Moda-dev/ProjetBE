
<?php 

// Autoloader de composer
require "vendor/autoload.php";

// Changement des class
use \modele\Securite;



// Securisation des variables
$secuVarUrl = Securite::secuVar($_GET);

// Ajout de la vue header
//include "";

// Liste des pages autorisées
$listeBlanche = array('administration');
if(!empty($secuVarUrl['page']) AND isset($secuVarUrl['page']) AND $secuVarUrl['page'] != 'index'){
    // Securisation de la variable
    $page = $secuVarUrl['page'];
    // Recherche de la page dans le dosier controleur
    if(in_array($page, $listeBlanche) AND file_exists('controller/'.$page.'.php')){
        include('controller/'.$page.'.php');
    }
    else{
        // Page introuvée 
        include('controller/404.php');
    }
    
}
else{
    // Page par défaut
    include('controller/index.php');
}

// Ajout de la vue footer
//include "";



