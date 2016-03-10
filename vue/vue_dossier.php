         <div class="titrePage">
          <div><h3>Modification d'un dossier</h3></div>
        </div>  
          

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
      <div class="row">
        <div class="col-md-10 col-md-offset-1">

          <table class="table table-bordered table-striped table-responsive colBack">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Statut</th>
                <th>Modification</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Dupond</td>
                <td>Jean</td>
                <td>15 rue des roses 86000 Poitiers</td>
                <td>Parent</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              </tr>
              <tr>
                <td>Durant</td>
                <td>Paul</td>
                <td>56 rue des glycines 79000 Niort</td>
                <td>Enfant</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              </tr>
              <tr>
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
              </tr>
              <tr>
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
              </tr>
              <tr>
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
            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Nom">
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Prenom">
            </div>
            <div class="form-group">
              <textarea rows="2" class="form-control" placeholder="Adresse"></textarea>
            </div>
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Statut">
            </div>
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-warning btn-lg" id="modelButton"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
          </div>
        </div>
      <!-- /.modal-content --> 
      </div>
        <!-- /.modal-dialog --> 
    </div>