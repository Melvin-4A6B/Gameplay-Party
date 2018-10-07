<div class="container">
    <div class="card">
        <div class="card-body my-4">
          <div class="col-md-8 m-auto">
          <?php if(isset($email) && $email != ""): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><?= $email; ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          </div>
            <h3 class="card-title text-center mb-4">Contact</h3>
            <h6 class="text-center mb-5">Bij vragen kunt u ons altijd raadplegen door het onderstaande formulier in te vullen.</h6>
            <form method="post" action="<?= ROOT; ?>contact/form/">
                <div class="col-md-8 m-auto">
                    <div class="form-group">
                        <label for="">Naam</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="mail" required>
                    </div>
                    <div class="form-group">
                        <label for="">Bericht</label>
                        <textarea type="text" name="message" class="form-control" style="height: 140px; resize: none;" required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="contact" class=" form-control btn btn-primary">Verzend</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
