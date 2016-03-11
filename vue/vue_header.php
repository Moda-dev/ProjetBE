<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bookoin</title>
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</head>
<body>
  <!-- Menu principal -->
    <div class="navbar navbar-default navbar-fixed-top menu-principal">
      <div class="container">
        <a class="navbar-brand" href="#">Bookoin</a>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
        <?php if(isset($_SESSION['login']) AND $_SESSION['idUser'] AND !empty($_SESSION['login']) AND !empty($_SESSION['idUser']))
              {  ?>
            <li class="active"><a href="index.php?page=adherent"> + Adhérent</a></li>
            <li><a href="index.php?page=enfant">+ Enfant</a></li>
            <li class="dropdown">
              <a href="gestion_dossier.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dossier <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?page=dossier">Modification</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="index.php?page=document">Documents</a></li>
              </ul>
            </li>
            <li><a href="index.php?page=livre">Livre</a></li>
            <li><a href="index.php?page=compta">Comptabilité</a></li>
            <li class="dropdown">
              <a href="gestion_dossier.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?page=admin">Ajout des livres</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Commande de livres</a></li>
              </ul>
            </li>
            <li><a href="index.php?page=login">Déconnexion</a></li>
            <?php }
            else{
              ?><li><a href="index.php">Connexion</a></li><?php
              }?>

          </ul>
        </div>
      </div>
    </div>
    <div class="espace"></div>
     <!-- Contenu de la page -->
    <div class="container">