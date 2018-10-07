<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ROOT; ?>assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= ROOT; ?>public/css/style.css">
    <title><?= TITLE; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-custom sticky-top mb-5">
    <div class="container">
        <a class="navbar-brand" href="<?= ROOT; ?>">
            <!-- <img src="../view/images/gpp.svg" height="60" alt=""> -->
            <img src="<?= ROOT ?>app/views/images/gpp.svg" style="height: 100px; margin-top: -12px; margin-bottom: -12px;" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link a-white" href="<?= ROOT; ?>bioscoop/show/">Bioscopen</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link a-white" href="#">Reserveren</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link a-white" href="<?= ROOT; ?>contact/form">Contact</a>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION["uid"])):
                ?>
                <ul class="navbar-nav mr-right">
                    <li class="nav-item">
                        <a class="nav-link a-white" href="<?= ROOT; ?>user/login/">Login</a>
                    </li>
                </ul>
            <?php elseif ($_SESSION["uid"]["role_id"] == 5): ?>
                <ul class="navbar-nav mr-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle a-white" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION["uid"]["user_name"]; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= ROOT; ?>admin/beheren/">Beheren</a>
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
