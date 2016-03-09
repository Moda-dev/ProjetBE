<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">Ajout d'un adhérent</div>
    </div>  
    <div class="panel-body" >
      <form id="signupform" class="form-horizontal" role="form" action="">
        <div id="signupalert" style="display:none" class="alert alert-danger">
            <p>Error:</p>
            <span></span>
        </div>
        <div class="form-group">
          <label for="name" class="col-md-3 control-label">Nom</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="pseudo" >
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Prenom</label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="mdp" >
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Adresse</label>
          <input class="form-control" type="text" placeholder="Adresse" name="adresse">
        </div>
        <div class="form-group">
          <label for="classe" class="col-md-3 control-label">Téléphone</label>
          <input class="form-control" type="text" placeholder="Numéro de téléphone" name="telephone">
        </div>
        <div class="form-group">
          <label for="option" class="col-md-3 control-label">Adresse Mail</label>
          <input class="form-control" type="email" placeholder="Adresse Mail">
        </div>
        <div class="form-group">                              
          <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i>Ajouter le parent</button>
          <!-- Redirection vers la page de connexion en jQuery -->
        </div>  
      </form>
    </div>
  </div>
</div>