<div class="container">
    <h2>Bioscopen</h2>
    <hr>
  <div class="row">
    <?php foreach($bioscopen as $bioscoop): ?>
      <div class="col-sm-4" style="padding: 20px;">
        <div class="card">
            <div class="card-head">
                <img src="<?= IMG . "bioscopen/" . $bioscoop['cinema_picture_path']; ?>" class="img-fluid w-100" style="height: 150px !important;" alt="<?= $bioscoop['cinema_name']; ?>">
            </div>
          <div class="card-body">
            <h5><?= $bioscoop['cinema_name']; ?></h5>
            <br><a href="https://kinepolis.nl/bioscopen/<?= $bioscoop['info_url']; ?>/info" target="_blank"><button type="button"class="btn btn-primary mt-3">Meer informatie</button></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
