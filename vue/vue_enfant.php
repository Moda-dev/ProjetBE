	<div class="row">
      <h4>Ajout un enfant</h4>
        <div class=" mainbox col-md-6 col-md-offset-3">
        <h5>Recherche d'un parent (adhérent)</h4>
            <!-- Barre de recherche d'un parent -->
            <form class="inline-form" method="POST" action="">
            <div class="form-group">
              <input type="search" name="name-parent" class="input-sm form-control" value="<?php if(isset($secuVarPost['name-parent']) AND !empty($secuVarPost['name-parent'])){ echo $secuVarPost['name-parent']; } ?>" placeholder="Nom ou prenom du parent">
              <button type="submit" class="btn btn-primary btn-sm">Chercher</button>
            </div>
          </form>
        </div>
      </div>
      <!-- Resultat de la recherche (liste de parent) -->
      <div class="row liste-parent">
        <div class="col-md-10 col-md-offset-1">
        <h5>Liste des parents possible</h5>
          <table class="table table-bordered table-striped table-responsive colBack">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Association</th>
                <th>Ajouter enfant</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                if(isset($adherents) AND !empty($adherents)){
                  foreach ($adherents as $adherent) {
                    ?>
                    <tr>
                      <td><?php echo $adherent['nom_adherent']; ?></td>
                      <td><?php echo $adherent['prenom_adherent']; ?></td>
                      <td><?php echo $adherent['adr_adherent']; ?></td>
                      <td><?php echo $adherent['email_adherent']; ?></td>
                      <td><?php echo $adherent['tel_adherent']; ?></td>
                      <td><?php echo $adherent['asso_adherent']; ?></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Ajouter un enfant"><button onclick="idParent(<?php echo $adherent['id_adherent']; ?>)" class="btn btn-primary btn-xs btnAddEnfant" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
                    </tr>
                    <?php
                  }
                }
                else{ ?>
                  <td> / </td>
                  <td> / </td>
                  <td> / </td>
                  <td> / </td>
                  <td> / </td>
                  <td> / </td>
                  <td> / </td>
                  <?php
                }
               ?>
            </tbody>
          </table>
          
    </div>
      </div>

      <div id="ajoutEnfant" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">Ajout d'un enfant</div>
    </div>  
    <div class="panel-body" >
        <form id="signupform" class="form-horizontal" role="form" action="" method="POST">
            
            <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
            </div>

            <input type="hidden" id="id-parent" class="form-control" name="id_parent" >
              
            <div class="form-group">
              <label for="name" class="col-md-3 control-label">Nom</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="nom-enfant" >
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-md-3 control-label">Prenom</label>
              <div class="col-md-9">
                <input type="password" class="form-control" name="prenom-enfant" >
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="col-md-3 control-label">Etablissement</label>
              <div class="col-md-9">
                <select class="form-control" id="nomEtablissement" name="etablissement" >
                <option> -- </option>
                <?php foreach ($etablissements as $dataEtablissement) {
                    ?><option value="<?php echo  $dataEtablissement['id_etablissement']; ?>"><?php echo $dataEtablissement['lib_etablissement']; ?></option><?php
                } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="classe" class="col-md-3 control-label" name="classe">Classe</label>
              <div class="col-md-9">
                <select class="form-control" id="classeEtablissement" name="classe">
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="option" class="col-md-3 control-label">Option</label>
              <div class="col-md-9">
                <select class="form-control" name="option">
                  <option>Mathématique</option>
                  <option>Latin</option>
                  <option>...</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="option" class="col-md-3 control-label">Discipline</label>
              <div class="col-md-9">
                <select class="form-control" name="discipline">
                  <option>Mathématique</option>
                  <option>Latin</option>
                  <option>...</option>
                </select>
              </div>
            </div>

            <div class="form-group">                              
              <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i>Ajouter l'enfant</button>
            </div>  
        </form>
     </div>
    </div>      
 </div>
</div>

