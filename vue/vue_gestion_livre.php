        <div class="titrePage">
          <div><h3>Gestion Livre</h3></div>
        </div>  
          

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                  <label for="search" class="sr-only">Search</label>
                  <input type="text" class="form-control" name="search" id="search" placeholder="search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
            	  </div>
            </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">

          <table class="table table-bordered table-striped table-responsive colBack">
            <thead>
              <tr>
                <th>ISBN</th>
                <th>Titre</th>
                <th>Type</th>
                <th>Catégorie</th>
                <th>Etat</th>
                <th>Editeur</th>
                <th>Format</th>
                <th>Année</th>
                <th>Auteur</th>
                <th>Modifier</th>
                <th>Effacer</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1234567789</td>
                <td>Maths pour les Nuls</td>
                <td></td>
                <td></td>
                <td>Neuf</td>
                <td></td>
                <td></td>
                <td>2010</td>
                <td></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>
              <tr>
                <td>1234569876</td>
                <td>zrgerg</td>
                <td></td>
                <td></td>
                <td>Neuf</td>
                <td></td>
                <td></td>
                <td>2010</td>
                <td></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          
		</div>
      </div>

      <!-- Modal to modify line #006990 -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Modifier vos informations</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input class="form-control " type="text" placeholder="ISBN">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Titre">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Type">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Catégorie">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Etat">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Editeur">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Format">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Année">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Auteur">
            </div>
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-warning btn-lg" id="modelButton"><span class="glyphicon glyphicon-ok-sign"></span> Mise à jour</button>
          </div>
        </div>
      <!-- /.modal-content edit--> 
      </div>
        <!-- /.modal-dialog --> 
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer Livre</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Voulez-vous vraiment supprimer ce livre?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Oui</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Non</button>
      </div>
        </div>
    <!-- /.modal-content delete--> 
  </div>
      <!-- /.modal-dialog --> 
    </div>