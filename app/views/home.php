<header>
    <div class="container" id="logo">
        <div class="row">
            <div class="col-md">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= ROOT ?>app\views\images\party.png" class="my-5 img-fluid" alt="Header image"
                                 title="Header image">
                            <div class="carousel-caption d-none d-md-block mb-2 h-75">
                                <h1>Welkom bij Gameplay-Party</h1>
                                <h5>De grootste party organisatie van Nederland!</h5>
                            </div>
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
