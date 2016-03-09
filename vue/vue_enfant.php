	<div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
      </div>
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
                  <!-- Redirection vers la page de connexion en jQuery -->
                </div>  
            </form>
         </div>
    </div>      
 </div>
</div>