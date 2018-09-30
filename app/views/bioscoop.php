<div class="container">
  <div class="row">
    <?php foreach($bioscopen as $bioscoop): ?>
      <div class="col-sm-4" style="padding: 20px;">
        <div class="card">
          <div class="card-body">
            <h5>Bioscoop </h5><?= $bioscoop['cinema_name']; ?>
<!--            <br><button type="button"class="btn btn-primary mt-3">Meer informatie</button>-->
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
