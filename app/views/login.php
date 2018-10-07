<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <?php if (isset($error) && $error != ""): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?= $error; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <h5 class="card-title text-center mb-4">Login</h5>
                    <form method="post" action="<?= ROOT; ?>User/login/">
                        <div class="form-group">
                            <label for="email">Email adres</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email adres"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="wachtwoord">Wachtwoord</label>
                            <input type="password" id="wachtwoord" class="form-control" name="password"
                                   placeholder="Wachtwoord" required>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" name="login" type="submit">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
