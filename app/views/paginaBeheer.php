<div class="container">

  <h2>Pagina's</h2>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Pagina naam</th>
          <th scope="col">Pagina content</th>
          <th scope="col">Optie</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($pages as $page): ?>
            <tr>
              <th scope="row"><?= $page["page_id"]; ?></th>
              <td><?= $page["page_name"]; ?></td>
              <td><?= substr($page["page_content"], 0, 100); ?></td>
              <td><a href="<?= ROOT; ?>admin/pagina_bewerken/<?= $page["page_id"]; ?>" title="Pagina content bewerken"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a></td>
            </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
