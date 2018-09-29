<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ROOT; ?>assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= ROOT; ?>public/css/style.css">
    <title><?= TITLE; ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= ROOT; ?>bioscoop/show/">Bioscopen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reserveren</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <?php
            if(!isset($_SESSION["uid"])):
          ?>
          <ul class="navbar-nav mr-right">
            <li class="nav-item">
              <a class="nav-link" href="<?= ROOT; ?>user/login/">Login</a>
            </li>
          </ul>
        <?php elseif($_SESSION["uid"]["role_id"] == 5): ?>
          <ul class="navbar-nav mr-right">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $_SESSION["uid"]["user_name"]; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Beheren</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= ROOT; ?>user/logout/">Uitloggen</a>
              </div>
            </li>
          </ul>
        <?php else: ?>
          <ul class="navbar-nav mr-right">
            <li class="nav-item">
              <a class="nav-link" href="<?= ROOT; ?>user/logout/">Uitloggen</a>
            </li>
          </ul>
        <?php endif; ?>
        </div>
      </div>
    </nav>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://picsum.photos/1250/350" class="my-5 img-fluid" alt="Header image" title="Header image">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Welkom bij Gameplay-Party</h5>
                      <p>De grootste party organisatie van Nederland!</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
