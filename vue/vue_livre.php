<div class="titrePage" style="margin-bottom: 45px;">
  <div>
    <h3>Liste des livres</h3></div>
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
        <?php foreach ($livres as $livre): ?>
          <tr>
            <td value="<?= $livre['isbn_livre'] ?>">
              <?= $livre['isbn_livre'] ?>
            </td>
            <td value="<?= $livre['titre_livre'] ?>">
              <?= $livre['titre_livre'] ?>
            </td>
            <td value="<?= $livre['editeur_livre'] ?>">
              <?= $livre['editeur_livre'] ?>
            </td>
            <td value="<?= $livre['annee_livre'] ?>">
              <?= $livre['annee_livre'] ?>
            </td>
            <td value="<?= $livre['format_livre'] ?>">
              <?= $livre['format_livre'] ?>
            </td>
            <td value="<?= $livre['auteur_livre'] ?>">
              <?= $livre['auteur_livre'] ?>
            </td>
            <td value="<?= $livre['type_livre'] ?>">
              <?= $livre['type_livre'] ?>
            </td>
            <td value="<?= $livre['categorie_livre'] ?>">
              <?= $livre['categorie_livre'] ?>
            </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>