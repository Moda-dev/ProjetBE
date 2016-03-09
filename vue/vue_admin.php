<div class="col-md-6 col-md-offset-3">
    <div class="input-group">
        <span class="input-group-btn">
            <span class="btn btn-primary btn-file">
                Importation<input type="file" multiple>
            </span>
        </span>
        <input type="text" class="form-control" readonly>
    </div>
</div>

<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
  <div class="panel panel-primary">
      <div class="panel-heading">
          <div class="panel-title">Ajout d'un livre</div>
      </div>  
    <div class="panel-body" >
      <form id="signupform" class="form-horizontal" role="form" action="">

          <div id="signupalert" style="display:none" class="alert alert-danger">
              <p>Error:</p>
              <span></span>
          </div>

          <div class="form-group">
            <label for="name" class="col-md-3 control-label">ISBN</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="isbn" >
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Titre</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="titre" >
            </div>
          </div>
        
          <div class="form-group">
            <label for="name" class="col-md-3 control-label">Edition</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="edition" >
            </div>
          </div>

          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Discipline</label>
            <div class="col-md-9">
              <select class="form-control">
                <option>ehra</option>
                <option>eahr</option>
                <option>erh</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="classe" class="col-md-3 control-label">Type</label>
            <div class="col-md-9">
              <select class="form-control">
                <option>earh</option>
                <option>eah</option>
                <option>aehr</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="option" class="col-md-3 control-label">Catégorie</label>
            <div class="col-md-9">
              <select class="form-control">
                <option>eagh</option>
                <option>earh</option>
                <option>eah</option>
              </select>
            </div>
          </div>
        
        <div class="form-group">
            <label for="password" class="col-md-3 control-label">Etat</label>
            <div class="col-md-9">
              <select class="form-control">
                <option>ahr</option>
                <option>earh</option>
                <option>erh</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="classe" class="col-md-3 control-label">Format</label>
            <div class="col-md-9">
              <select class="form-control">
                <option>erzge</option>
                <option>erheth</option>
                <option>znjg</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="option" class="col-md-3 control-label">Auteur</label>
            
          </div>

          <div class="form-group">                              
            <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i>Valider</button>
            <!-- Redirection vers la page de connexion en jQuery -->
          </div>  
      </form>
    </div>
  </div>      
</div>