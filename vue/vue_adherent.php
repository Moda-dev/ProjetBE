 <div class="retour-message">
  <div class="alert alert-success msg-info" role="alert" style="display: block">
    <strong> Parent ajouter avec succes : </strong> Voulez vous ajouter un enfant a ce parent?
    </br>
    <button class="btn btn-primary" id ="addEnfant">Ajouter un enfant</button>
  </div>
  <div class="alert alert-danger msg-info" id="msg-error" role="alert" style="<?php if(isset($error) and $error == 1){echo "display: inline-block";}?>">
    <strong>Erreur :</strong> <?php echo $message; ?>
  </div>
</div>

 <div id="ajoutAdherent" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
	<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">Ajouter un parent</div>
    </div>  
    <div class="panel-body" >
        <form id="signupform" method="POST" class="form-horizontal" role="form" action="">
            
            <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
            </div>
              
            <div class="form-group">
              <label for="name" class="col-md-3 control-label">Nom</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="nom" >
              </div>
            </div>
            <div class="form-group">
              <label for="prenom" class="col-md-3 control-label">Prenom</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="prenom" >
              </div>
            </div>

            <div class="form-group">
              <label for="adresse" class="col-md-3 control-label">Adresse</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="adresse" >
              </div>
            </div>

            <div class="form-group">
              <label for="telephone" class="col-md-3 control-label">Téléphone</label>
	            <div class="col-md-9">
	            	<input type="text" class="form-control" name="telephone" >
	            </div>
            </div>

            <div class="form-group">
              <label for="mail" class="col-md-3 control-label">Adresse Mail</label>
  	            <div class="col-md-9">
	            	<input type="text" class="form-control" name="mail" >
	            </div>
            </div>

            <div class="form-group">                              
              <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i>Ajouter un parent</button>
            </div>  
        </form>
     </div>
    </div>      
 </div>   

 <div id="ajoutEnfant" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
	<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">Ajout d'un enfant</div>
    </div>  
    <div class="panel-body" >
        <form id="signupform" class="form-horizontal" role="form" action="">
            
            <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
            </div>

            <input type="hidden" class="form-control" name="id_parent" >
              
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
              <label for="password" class="col-md-3 control-label">Etablissement</label>
              <div class="col-md-9">
                <select class="form-control">
					<option>1ère S</option>
					<option>1ère ES</option>
					<option>Seconde</option>
				</select>
              </div>
            </div>

            <div class="form-group">
              <label for="classe" class="col-md-3 control-label">Classe</label>
              <div class="col-md-9">
                <select class="form-control">
					<option>1ère S</option>
					<option>1ère ES</option>
					<option>Seconde</option>
				</select>
              </div>
            </div>

            <div class="form-group">
              <label for="option" class="col-md-3 control-label">Option</label>
              <div class="col-md-9">
                <select class="form-control">
					<option>Mathématique</option>
					<option>Latin</option>
					<option>...</option>
				</select>
              </div>
            </div>

            <div class="form-group">                              
              <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i>Ajouter l'enfant</button>
            </div>  
        </form>
     </div>
    </div>      
 </div>   