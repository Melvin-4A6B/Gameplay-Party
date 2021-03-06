<div class="container">
    <h2>Bioscopen</h2>
    <hr>
    <div class="row">
        <?php foreach ($bioscopen as $bioscoop): ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 my-3" style="">
                <div class="card">
                    <div class="card-head">
                        <img src="<?= IMG . "bioscopen/" . $bioscoop['cinema_picture_path']; ?>" class="img-fluid w-100"
                             style="height: 150px !important;" alt="<?= $bioscoop['cinema_name']; ?>">
                    </div>
                    <div class="card-body">
                        <h5><?= $bioscoop['cinema_name']; ?></h5>
                        <a href="https://kinepolis.nl/bioscopen/<?= $bioscoop['info_url']; ?>/info" target="_blank">
                            <button type="button" class="btn btn-primary mt-3">Meer informatie</button>
                        </a>
                        <a href="<?= ROOT ?>reserveer/bios/<?= $bioscoop['cinema_id']; ?>">
                            <button type="button" class="btn btn-custom mt-3">Reserveren</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
