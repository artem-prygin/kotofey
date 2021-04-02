<?php require_once '_header.php' ?>
<?php require_once '_misters.php' ?>

<!--Слайдер с котами-->
<section class="section-catsSlider">
    <div class="container">
        <div class="cats-slider owl-carousel">
            <?php for ($i = 1; $i < 9; $i += 2) : ?>
                <div class="cats-slide">
                    <div class="cats-slide__img">
                        <div class="cats-slide__img-wrap">
                            <a href="cat">
                                <img src="img/cats/wait<?= $i ?>.jpg" alt="wait">
                            </a>
                            <div class="cats-slide__img-name">
                                <h4 class="smallTitle cats-slide__img-title">Хавьер</h4>
                                <div class="descr cats-slide__img-descr">1 год и 4 месяца</div>
                            </div>
                        </div>
                        <div class="cats-slide__img-wrap">
                            <a href="cat">
                                <img src="img/cats/wait<?= $i + 1 ?>.jpg" alt="wait">
                            </a>
                            <div class="cats-slide__img-name">
                                <h4 class="smallTitle cats-slide__img-title">Хавьер</h4>
                                <div class="descr cats-slide__img-descr">1 год и 4 месяца</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <?php for ($i = 1; $i < 9; $i += 2) : ?>
                <div class="cats-slide">
                    <div class="cats-slide__img">
                        <div class="cats-slide__img-wrap">
                            <a href="cat">
                                <img src="img/cats/wait<?= $i ?>.jpg" alt="wait">
                            </a>
                            <div class="cats-slide__img-name">
                                <h4 class="smallTitle cats-slide__img-title">Хавьер</h4>
                                <div class="descr cats-slide__img-descr">1 год и 4 месяца</div>
                            </div>
                        </div>
                        <div class="cats-slide__img-wrap">
                            <a href="cat">
                                <img src="img/cats/wait<?= $i + 1 ?>.jpg" alt="wait">
                            </a>
                            <div class="cats-slide__img-name">
                                <h4 class="smallTitle cats-slide__img-title">Хавьер</h4>
                                <div class="descr cats-slide__img-descr">1 год и 4 месяца</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php require_once '_found-home.php' ?>
<?php require_once '_petcat.php' ?>
<?php require_once '_footer.php' ?>
<?php require_once '_end.php' ?>
