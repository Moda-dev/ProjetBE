<div class="retour-message">
  <div class="alert alert-success msg-info" role="alert" style="<?php if(isset($success) AND $success == 1){ echo(" display: block "); } ?>">
    <strong> Livre ajouter avec succes </strong>
    </br>
  </div>
  <div class="alert alert-danger msg-info" id="msg-error" role="alert" style="<?php if(isset($error) and $error == 1){echo " display: inline-block ";}?>">
    <strong>Erreur :</strong>
    <?php echo $message; ?>
  </div>
</div>


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
    <div class="panel-body">
      <form id="signupform" class="form-horizontal" role="form" action="" method="post">

        <div id="signupalert" style="display:none" class="alert alert-danger">
          <p>Error:</p>
          <span></span>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-3 control-label">ISBN</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="isbn">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Titre</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="titre">
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-3 control-label">Editeur</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="editeur">
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Annee</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="annee">
          </div>
        </div>

        <div class="form-group">
          <label for="classe" class="col-md-3 control-label">Format</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="format">
          </div>
        </div>

        <div class="form-group">
          <label for="option" class="col-md-3 control-label">Auteur</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="auteur">
          </div>
        </div>


        <div class="form-group">
          <label for="classe" class="col-md-3 control-label">Type</label>
          <div class="col-md-9">
            <select class="form-control" name="type">
              <?php foreach ($types as $type): ?>
                <option value="<?= $type['id_type_livre'] ?>">
                  <?= $type['lib_type_livre'] ?>
                </option>
                <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="option" class="col-md-3 control-label">Catégorie</label>
          <div class="col-md-9">
            <select class="form-control" name="categorie">
              <?php foreach ($categories as $categorie): ?>
                <option value="<?= $categorie['id_categorie'] ?>">
                  <?= $categorie['lib_categorie'] ?>
                </option>
                <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i>Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>