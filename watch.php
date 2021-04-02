<?php require_once '_header.php' ?>

<!--Подглядываем за котиками, заголовок-->
<section class="section-watchTop">
    <div class="container watch-top">
        <div class="watch-text">
            <h2 class="watch-title title">Подглядываем за котиками</h2>
            <div class="watch-descr descr">В любой непонятной ситуации просто посмотрите на наших котиков</div>
        </div>

        <div class="watch-cat">
            <img src="img/watch/watch.png" alt="cat">
        </div>
    </div>
</section>

<!--Камеры-->
<section class="section-watch">
    <div class="container">
        <div class="watch-blocks">
            <div class="watch-block">
                <div class="watch-block__video">
                    <video poster="img/watch/watch1.jpg">
                        <source src="no.mp4" type="video/mp4">
                    </video>
                    <div class="watch-overlay"></div>
                    <svg width="79" height="79" viewBox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="39.5" cy="39.5" r="39.5" fill="#F9F7F0"/>
                        <path d="M48.7344 38.1175C50.0677 38.8873 50.0677 40.8118 48.7344 41.5816L35.8583 49.0156C34.5249 49.7854 32.8583 48.8232 32.8583 47.2836L32.8583 32.4155C32.8583 30.8759 34.5249 29.9137 35.8583 30.6835L48.7344 38.1175Z" fill="#477B72"/>
                    </svg>
                </div>

                <div class="watch-camera">
                    <span>Камера 1</span>
                    <?php require 'img/watch/camera.svg';?>
                </div>

                <div class="watch-camera__title smallTitle">Красавчик Жульен</div>
            </div>

            <div class="watch-block">
                <div class="watch-block__video">
                    <video poster="img/watch/watch2.jpg">
                        <source src="no.mp4" type="video/mp4">
                    </video>
                    <div class="watch-overlay"></div>
                    <svg width="79" height="79" viewBox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="39.5" cy="39.5" r="39.5" fill="#F9F7F0"/>
                        <path d="M48.7344 38.1175C50.0677 38.8873 50.0677 40.8118 48.7344 41.5816L35.8583 49.0156C34.5249 49.7854 32.8583 48.8232 32.8583 47.2836L32.8583 32.4155C32.8583 30.8759 34.5249 29.9137 35.8583 30.6835L48.7344 38.1175Z" fill="#477B72"/>
                    </svg>
                </div>

                <div class="watch-camera">
                    <span>Камера 2</span>
                    <?php require 'img/watch/camera.svg';?>
                </div>

                <div class="watch-camera__title smallTitle">Багира</div>
            </div>

            <div class="watch-block">
                <div class="watch-block__video">
                    <video poster="img/watch/watch3.jpg">
                        <source src="no.mp4" type="video/mp4">
                    </video>
                    <div class="watch-overlay"></div>
                    <svg width="79" height="79" viewBox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="39.5" cy="39.5" r="39.5" fill="#F9F7F0"/>
                        <path d="M48.7344 38.1175C50.0677 38.8873 50.0677 40.8118 48.7344 41.5816L35.8583 49.0156C34.5249 49.7854 32.8583 48.8232 32.8583 47.2836L32.8583 32.4155C32.8583 30.8759 34.5249 29.9137 35.8583 30.6835L48.7344 38.1175Z" fill="#477B72"/>
                    </svg>
                </div>

                <div class="watch-camera">
                    <span>Камера 3</span>
                    <?php require 'img/watch/camera.svg';?>
                </div>

                <div class="watch-camera__title smallTitle">Тристан</div>
            </div>

            <div class="watch-block">
                <div class="watch-block__video">
                    <video poster="img/watch/watch4.jpg">
                        <source src="no.mp4" type="video/mp4">
                    </video>
                    <div class="watch-overlay"></div>
                    <svg width="79" height="79" viewBox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="39.5" cy="39.5" r="39.5" fill="#F9F7F0"/>
                        <path d="M48.7344 38.1175C50.0677 38.8873 50.0677 40.8118 48.7344 41.5816L35.8583 49.0156C34.5249 49.7854 32.8583 48.8232 32.8583 47.2836L32.8583 32.4155C32.8583 30.8759 34.5249 29.9137 35.8583 30.6835L48.7344 38.1175Z" fill="#477B72"/>
                    </svg>
                </div>

                <div class="watch-camera">
                    <span>Камера 4</span>
                    <?php require 'img/watch/camera.svg';?>
                </div>

                <div class="watch-camera__title smallTitle">Жорж и компания</div>
            </div>


        </div>
    </div>
</section>


<?php require_once '_footer.php' ?>
<?php require_once '_end.php' ?>

