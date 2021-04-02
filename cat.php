<?php require_once '_header.php' ?>
<?php require_once '_misters.php' ?>

<!--Информация о конкретном коте-->
<section class="section-cat">
    <div class="cat">
        <div class="container">
            <div class="cat-wrapper">
                <div class="cat-slide">
                    <div class="cat-images">
                        <div class="cat-images__top">
                            <img src="img/cats/cat1.jpg" alt="cat">
                        </div>
                        <div class="cat-images__bottom">
                            <div class="cat-images__bottom-img">
                                <img src="img/cats/cat2.jpg" alt="cat">
                            </div>
                            <div class="cat-images__bottom-img">
                                <img src="img/cats/cat3.jpg" alt="cat">
                            </div>
                        </div>
                    </div>

                    <div class="cat-info">
                        <div class="cat-info__top">
                            <h2 class="cat-info__title title">Хавьер</h2>
                            <div class="cat-info__age">
                                <?php require 'img/cats/paw-blue.svg'; ?>
                                <span>1 год и 4 месяца</span>
                            </div>
                        </div>

                        <div class="cat-info__descr descr">
                            Начинаем искать дом и любящие ручки для нашего непростого парня, Хавьера. В семье не должно
                            быть детей, их он рассматривает как угрозу. И других животных. С людьми ладит очень хорошо.
                            Хавьер ласковый, но своенравный. Ищем для него взрослую и любящую семью. Хавьер у нас
                            аля-бобтейл, у него почти нет хвостика.
                        </div>

                        <div class="cat-info__list">
                            <div class="cat-info__list-title">Хавьер обработан от всех паразитов</div>
                            <ul class="about-food__list descr">
                                <li>Комплексно привит. Имеет вет.паспорт</li>
                                <li>На отлично знает лоточек</li>
                                <li>Кастрирован</li>
                            </ul>
                        </div>

                        <div class="cat-arrow">
                            <a href="cats"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Форма обратной связи по коту-->
<section class="section-catForm">
    <div class="main-form cat-form" id="main-form">
        <div class="container main-form__wrapper">
            <div class="main-form__content">
                <h2 class="title main-form__title">Хавьер ждет письмо</h2>
                <div class="main-form__descr">Если вы хотите узнать что-то об этом котике, спросите здесь</div>

                <form action="" class="main-form__form">
                    <label for="">
                        <span class="input-title input-title__black">Ваше имя</span>
                        <input type="text" placeholder="Ваше имя" name="name">
                    </label>
                    <label for="">
                        <span class="input-title input-title__black">Email</span>
                        <input type="email" placeholder="Email" name="email">
                    </label>
                    <label for="">
                        <span class="input-title input-title__black">Сообщение</span>
                        <textarea placeholder="Сообщение" name="message" rows="7"></textarea>
                    </label>

                    <button class="btn main-form__btn">Отправить</button>
                </form>
            </div>

            <div class="main-form__cat">
                <img src="img/main/main-form-cat.png" alt="cat">
            </div>
        </div>
    </div>
</section>

<?php require_once '_found-home.php' ?>
<?php require_once '_petcat.php' ?>
<?php require_once '_footer.php' ?>
<?php require_once '_end.php' ?>
