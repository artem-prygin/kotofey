<?php require_once '_header.php' ?>

<!--Адрес, которого не будет-->
<section class="section-contactsTop">
    <div class="container">
        <div class="contacts-top">
            <div class="contacts-text">
                <h2 class="contacts-title title">Здесь должен быть адрес, но его не будет</h2>
                <div class="descr contacts-descr">Нам часто приносят котиков и просят приютить, а иногда просто
                    подбрасывают под двери. К сожалению, мы не можем оставлять всех. И поэтому не указываем на сайте
                    адрес. Но это не значит, что мы отказываемся помогать попавшим в беду котейкам
                </div>
            </div>

            <div class="contacts-img">
                <img src="img/contacts/contacts.png" alt="cat">
            </div>
        </div>
    </div>
</section>

<!--Как связаться-->
<section class="section-contactsForm">
    <div class="contacts-form main-form" id="main-form">
        <div class="container main-form__wrapper">
            <div class="main-form__content">
                <h2 class="title main-form__title">Вы всегда можете связаться с нами </h2>
                <div class="main-form__descr">Спросите все, что вам интересно о приюте.
                    <span>У котиков лапки и они не могут отвечать, но мы им все передадим</span>
                </div>

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

<!--Реквизиты-->
<section class="section-contactsDocs">
    <div class="container">
        <div class="contacts-info">
            <div class="contacts-info__title title">Наши реквизиты</div>
            <div class="contacts-docs">
                <div class="contacts-docs__img">
                    <img src="img/contacts/docs.svg" alt="docs">
                </div>
                <ul class="about-food__list contacts-docs__list descr">
                    <li>АНОПДБК «Котофей»</li>
                    <li>ИНН 2366006390</li>
                    <li>КПП 236601001</li>
                    <li>Р/с 40703810230060000385</li>
                    <li>БИК 046015602</li>
                    <li>К/с 30101810600000000602</li>
                    <li>Юго-Западный Банк ПАО Сбербанк, Ростов-на-Дону</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require_once '_footer.php' ?>
<?php require_once '_end.php' ?>

