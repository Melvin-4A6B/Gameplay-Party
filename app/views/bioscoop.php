<div class="row">
  <?php foreach($bioscopen as $bioscoop): ?>
    <div class="col-sm-4" style="padding: 20px;">
      <div class="card">
        <div class="card-body">
          <h5># </h5><?= $bioscoop['bioscoop_id']; ?>
          <h5>Naam: </h5><?= $bioscoop['bioscoop_naam']; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
