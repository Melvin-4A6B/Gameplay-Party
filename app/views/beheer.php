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

  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Bioscopen</h2>
    </div>
    <div class="col-md-6 text-right">
      <a href="<?= ROOT; ?>admin/addCinema/" title="Bioscoop toevoegen"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Naam</th>
          <th scope="col">Straat</th>
          <th scope="col">Huisnummer</th>
          <th scope="col">Postcode</th>
          <th scope="col">Plaats</th>
          <th scope="col">Stad</th>
          <th scope="col">Auto</th>
          <th scope="col">OV</th>
          <th scope="col">Fiets</th>
          <th scope="col">Rolstoel</th>
          <th scope="col">Voorwaarden</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($cinemas as $cinema): ?>
            <tr>
              <th scope="row"><?= $cinema["cinema_id"]; ?></th>
              <td><?= substr($cinema["cinema_name"], 0 ,40); ?></td>
              <td><?= substr($cinema["street"], 0 ,40); ?></td>
              <td><?= substr($cinema["house_number"], 0 ,40); ?></td>
              <td><?= substr($cinema["postal_code"], 0 ,40); ?></td>
              <td><?= substr($cinema["city"], 0 ,40); ?></td>
              <td><?= substr($cinema["state"], 0 ,40); ?></td>
              <td><?= substr($cinema["car_accessibility"], 0 ,40); ?>...</td>
              <td><?= substr($cinema["ov_accessibility"], 0 ,40); ?>...</td>
              <td><?= substr($cinema["bike_accessibility"], 0 ,40); ?>...</td>
              <td><?= $cinema["wheelchair_accessibility"]; ?></td>
              <td><?= substr($cinema["cinema_conditions"], 0 ,40); ?>...</td>
              </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
