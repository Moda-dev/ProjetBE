<?php 
// Déconnexion de l'utilisateur, destruction de la session
session_destroy();
// Rediction vers la page de login
header('Location: /index.php');