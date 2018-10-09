<header>
    <div class="container" id="logo">
        <div class="row">
            <div class="col-md">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <img src="<?= ROOT ?>app\views\images\party.jpeg" class="my-5 w-100" alt="Header image"
                             title="Header image">
                        <div class="carousel-caption d-none d-md-block mb-2 h-50">
                            <h1>Welkom bij Gameplay-Party</h1>
                            <h5>De grootste party organisatie van Nederland!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <h1>Over <?= $welcome; ?></h1>
    <section>
        <p class="mb-5">
            <?= $aboutUs; ?>
        </p>
    </section>
</div>
