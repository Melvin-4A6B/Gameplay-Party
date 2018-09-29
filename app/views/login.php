<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center mb-4">Login</h5>
          <form method="post" action="<?= ROOT; ?>user/login/">
            <div class="form-group">
              <input type="email" id="email" class="form-control" name="email" placeholder="Email adres" required>
              <label for="email">Email adres</label>
            </div>
            <div class="form-group">
              <input type="password" id="wachtwoord" class="form-control" name="password" placeholder="Wachtwoord" required>
              <label for="wachtwoord">Wachtwoord</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" name="login" type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
