       <div class="titrePage" style="margin-bottom: 45px;">
          <div><h3>Liste des livres</h3></div>
        </div>  
          
      <div class="row">
        <div class="col-md-10 col-md-offset-1">        
          <table class="table table-bordered table-striped table-responsive colBack">
            <thead>
              <tr>
                <th>ISBN</th>
                <th>Titre</th>
                <th>Editeur</th>
                <th>Année</th>
                <th>Format</th>
                <th>Auteur</th>
                <th>Type</th>
                <th>Catégorie</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($livres as $infoLivre) { ?>
              <tr>
                <td><?php echo $infoLivre['isbn_livre']; ?></td>
                <td><?php echo $infoLivre['titre_livre']; ?></td>
                <td><?php echo $infoLivre['editeur_livre']; ?></td>
                <td><?php echo $infoLivre['annee_livre']; ?></td>
                <td><?php echo $infoLivre['format_livre']; ?></td>
                <td><?php echo $infoLivre['auteur_livre']; ?></td>
                <td><?php echo $infoLivre['type_livre']; ?></td>
                <td><?php echo $infoLivre['categorie_livre']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table> 
				</div>
      </div>