<nav class="navbar navbar-expand-lg navbar-light sticky-top mb-2">
    <div class="container">
        <a class="navbar-brand" href="<?= ROOT; ?>">
            <img src="<?= ROOT ?>app/views/images/gpp.svg" class="col-md-8 col-12"
                 style=" margin-top: -20px; margin-left: -13px;" alt="Logo">
        </a>
        <button style="position: absolute; left: 80.5%; background: #fff" class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav bg-custom mr-auto">
                <li class="nav-item">
                    <a class="nav-link a-white pl-3" href="<?= ROOT; ?>bioscoop/show/">Reserveren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-white pl-3 pr-3" href="<?= ROOT; ?>contact/form">Contact</a>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION["uid"])):
                ?>
                <ul class="navbar-nav mr-right bg-custom">
                    <li class="nav-item">
                        <a class="nav-link  a-white pl-3" href="<?= ROOT; ?>user/login/">Login</a>
                    </li>
                </ul>
            <?php elseif ($_SESSION["uid"]["role_id"] == 1): // Cinemas ?>
                <ul class="navbar-nav mr-right bg-orange">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION["uid"]["user_name"]; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= ROOT; ?>bioscoop/beheren/">Beheer uw bioscoop</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= ROOT; ?>bioscoop/reserveringen/">Reserveringen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= ROOT; ?>user/logout/">Afmelden</a>
                        </div>
                    </li>
                </ul>
            <?php elseif ($_SESSION["uid"]["role_id"] == 3): // Cokamel ?>
                <ul class="navbar-nav mr-right  bg-orange">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle a-blue" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION["uid"]["user_name"]; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item  a-blue" href="<?= ROOT; ?>admin/beheren/">Beheer</a>
                            <a class="dropdown-item" href="<?= ROOT; ?>admin/paginaBeheer/">Pagina beheer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= ROOT; ?>admin/accountBeheer/">Bioscoop beheer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item  a-blue" href="<?= ROOT; ?>user/logout/">Afmelden</a>
                        </div>
                    </li>
                </ul>
            <?php elseif ($_SESSION["uid"]["role_id"] == 4): // Peter / Jack ?>
                <ul class="navbar-nav mr-right  bg-orange">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  a-blue" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION["uid"]["user_name"]; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= ROOT; ?>admin/beheren/">Traffic</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= ROOT; ?>admin/beheren/">Fianancie&euml;n</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= ROOT; ?>user/logout/">Afmelden</a>
                        </div>
                    </li>
                </ul>
            <?php elseif ($_SESSION["uid"]["role_id"] == 5): // Hanneke ?>
                <ul class="navbar-nav mr-right  bg-orange">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle a-white" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION["uid"]["user_name"]; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= ROOT; ?>admin/paginaBeheer/">Pagina beheer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= ROOT; ?>admin/accountBeheer/">Bioscoop beheer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= ROOT; ?>user/logout/">Afmelden</a>
                        </div>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav mr-right">
                    <li class="nav-item">
                        <a class="nav-link  a-blue" href="<?= ROOT; ?>user/logout/">Afmelden</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>
