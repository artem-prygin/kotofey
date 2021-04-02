<!--Кто уже нашел свой дом-->
<section class="section-foundHome">
    <div class="container">
        <div class="cats-home">
            <div class="title cats-home__title">Кто уже нашел свой дом</div>

            <div class="cats-home__blocks owl-carousel">
                <?php $names = ['Омега', 'Бемби', 'Санта', 'Манифик']; ?>
                <?php for($i=1; $i<5; $i++) : ?>
                    <div class="cats-home__block">
                        <div class="cats-home__img">
                            <img src="img/cats/home<?=$i?>.jpg" alt="home">
                        </div>

                        <div class="cats-home__info">
                            <div class="cats-home__name">
                                <span><?=$names[$i-1];?></span>
                                <?php if ($i === 1) : ?>
                                    <?php require 'img/cats/paw-pink.svg'; ?>
                                <?php else :?>
                                    <?php require 'img/cats/paw-blue.svg'; ?>
                                <?php endif;?>
                            </div>
                            <div class="cats-home__descr descr">
                                пристроен<?php if ($i === 1) echo 'а'; ?> в январе 2019
                            </div>
                        </div>
                    </div>
                <?php endfor;?>
                <?php for($i=1; $i<5; $i++) : ?>
                    <div class="cats-home__block">
                        <div class="cats-home__img">
                            <img src="img/cats/home<?=$i?>.jpg" alt="home">
                        </div>

                        <div class="cats-home__info">
                            <div class="cats-home__name">
                                <span><?=$names[$i-1];?></span>
                                <?php if ($i === 1) : ?>
                                    <?php require 'img/cats/paw-pink.svg'; ?>
                                <?php else :?>
                                    <?php require 'img/cats/paw-blue.svg'; ?>
                                <?php endif;?>
                            </div>
                            <div class="cats-home__descr descr">
                                пристроен<?php if ($i === 1) echo 'а'; ?> в январе 2019
                            </div>
                        </div>
                    </div>
                <?php endfor;?>
            </div>
        </div>
    </div>
</section>
