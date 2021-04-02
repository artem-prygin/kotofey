<?php require_once '_header.php' ?>

    <!--Мы помогаем котикам-->
    <section class="section-main-top">
        <div class="main-header">
            <div class="container">
                <h2 class="main-title title">
                    Мы помогаем котикам
                    <span>и людям находить друг друга</span>
                </h2>

                <a href="#main-form" class="main-btn btn">Найти друг друга</a>
            </div>
        </div>

        <div class="main-cat">
            <img src="img/main/main-cat.png" alt="cat">
        </div>
    </section>

    <!--Как мы это делаем-->
    <section class="section-how">
        <div class="container main-how__wrapper">
            <div class="main-how">
                <div class="main-how__text">
                    <h2 class="main-how__title title">
                        Вот как мы <span>это делаем</span>
                    </h2>

                    <div class="main-how__descr">
                        Мы открыли единственный в Сочи
                        приют для котов и помогаем питомцам, которым не выжить на улице. Это больные, травмированные
                        и новорожденные котейки. Мы лечим их, стерилизуем и помогаем
                        найти дом
                    </div>
                </div>
            </div>

            <div class="main-how__cat">
                <img src="img/main/heart-cat.png" alt="cat">
            </div>
        </div>
    </section>

    <!--Котосчетчики-->
    <section class="section-count">
        <div class="main-count">
            <div class="container">
                <h2 class="title main-count__mainTitle">Котосчетчики</h2>
                <div class="main-count__blocks">
                    <div class="main-count__block">
                        <div class="main-count__title title">290</div>
                        <div class="main-count__descr">котиков приютили <span>за все время</span></div>
                    </div>
                    <div class="main-count__block">
                        <div class="main-count__title title">220</div>
                        <div class="main-count__descr">из них отдали <span>в новую семью</span></div>
                    </div>
                    <div class="main-count__block">
                        <div class="main-count__title title">70</div>
                        <div class="main-count__descr">котеек сейчас <span>в приюте</span></div>
                    </div>

                    <div class="main-count__ball">
                        <img src="img/main/ball.png" alt="ball">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Форма помощи приюту-->
    <section class="section-form">
        <div class="container">
            <div class="helpForm">
                <div class="helpForm-content">
                    <h2 class="helpForm-title title">Как помочь приюту</h2>
                    <div class="helpForm-descr">Приют работает благодаря пожертвованиям добрых людей. Вы можете
                        присоединиться и перечислить любую сумму на корм, уход и лечение наших постояльцев
                    </div>
                    <form action="index" class="helpForm-form">
                        <label for="name">
                            <span class="input-title">Как вас зовут</span>
                            <input id="name" type="text" name="name" placeholder="Как вас зовут">
                        </label>
                        <label for="email">
                            <span class="input-title">Ваш email</span>
                            <input id="email" type="email" name="email" placeholder="Ваш email">
                        </label>
                        <label for="rub">
                            <span class="input-title">Сколько хотите перечислить</span>
                            <input id="rub" type="email" name="rub" placeholder="Сколько хотите перечислить">
                            <i class="fa fa-ruble"></i>
                        </label>
                        <button type="submit" class="btn helpForm-btn">Помочь котикам</button>
                    </form>
                </div>

                <div class="helpForm-img">
                    <img src="img/helpForm/helpForm-cat.png" alt="cat">
                </div>
            </div>
        </div>
    </section>

    <!--Наши котики-->
    <section class="section-cats">
        <div class="container">
            <div class="main-cats">
                <div class="main-cats__title main-doubleTitle">
                    <h2 class="title main-cats__title-left main-doubleTitle__left">Наши котики</h2>
                    <a class="btn main-cats__btn main-doubleTitle__btn" href="cats">Все котики</a>
                </div>

                <div class="main-cats__blocks">
                    <div class="main-cats__block">
                        <div class="main-cats__img main-cats__short">
                            <img src="img/cats-main/cat.jpg" alt="cat">
                            <div class="main-cats__about">
                                <div class="main-cats__name">Фикси</div>
                                <div class="main-cats__age">10 месяцев</div>
                            </div>
                        </div>
                        <div class="main-cats__img main-cats__long">
                            <img src="img/cats-main/cat2.jpg" alt="cat">
                            <div class="main-cats__about">
                                <div class="main-cats__name">Фикси</div>
                                <div class="main-cats__age">10 месяцев</div>
                            </div>
                        </div>
                    </div>
                    <div class="main-cats__block">
                        <div class="main-cats__img main-cats__long">
                            <img src="img/cats-main/cat3.jpg" alt="cat">
                            <div class="main-cats__about">
                                <div class="main-cats__name">Фикси</div>
                                <div class="main-cats__age">10 месяцев</div>
                            </div>
                        </div>
                        <div class="main-cats__img main-cats__short">
                            <img src="img/cats-main/cat4.jpg" alt="cat">
                            <div class="main-cats__about">
                                <div class="main-cats__name">Фикси</div>
                                <div class="main-cats__age">10 месяцев</div>
                            </div>
                        </div>
                    </div>
                    <div class="main-cats__block">
                        <div class="main-cats__img main-cats__short">
                            <img src="img/cats-main/cat5.jpg" alt="cat">
                            <div class="main-cats__about">
                                <div class="main-cats__name">Фикси</div>
                                <div class="main-cats__age">10 месяцев</div>
                            </div>
                        </div>
                        <div class="main-cats__img main-cats__long">
                            <img src="img/cats-main/cat6.jpg" alt="cat">
                            <div class="main-cats__about">
                                <div class="main-cats__name">Фикси</div>
                                <div class="main-cats__age">10 месяцев</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Новости - виджет ВК-->
    <section class="section-news">
        <div class="container">
            <div class="main-doubleTitle">
                <h2 class="title main-doubleTitle__left">Что у нас нового</h2>
                <a class="btn main-doubleTitle__btn main-news__btn" href="https://vk.com/kotofey_sochi" target="_blank"><?php require_once 'img/social/vk.svg'; ?>
                    Подписаться</a>
            </div>

            <div class="main-news">
                <div class="main-news__buttons">
                    <div class="main-news__button"></div>
                    <div class="main-news__button"></div>
                    <div class="main-news__button"></div>
                </div>

                <div class="main-news__block">
                    <div id="vk_post_-124703221_32634"></div>
                    <script>
                        (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "https://vk.com/js/api/openapi.js?167"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'vk_openapi_js'));
                        (function() {
                            if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post('vk_post_-124703221_32634', -124703221, 32634, 'nGVgQEWwt6pfvQuJz7D5Iaj812hh')) setTimeout(arguments.callee, 50);
                        }());
                    </script>
                </div>
            </div>
        </div>
    </section>

    <!--Игра "как быть уличным котом"-->
    <section class="section-playStreet">
        <div class="main-street">
            <div class="container main-street__wrapper">
                <div class="main-street__text">
                    <h2 class="main-street__title title">
                        Как быть уличным <span>котом и не облажаться</span>
                    </h2>
                    <div class="main-street__descr">Проверьте свои навыки выживания на улице</div>
                    <a href="" class="btn main-street__btn">Играть</a>
                </div>

                <div class="main-street__ball">
                    <img src="img/main/ball.png" alt="ball">
                </div>
            </div>
        </div>
    </section>

    <!--Форма "написать котикам"-->
    <section class="section-form__second">
        <div class="main-form" id="main-form">
            <div class="container main-form__wrapper">
                <div class="main-form__content">
                    <h2 class="title main-form__title">Написать котикам</h2>
                    <div class="main-form__descr">Спросите все, что вам интересно о приюте.
                        <span>У котиков лапки и они не могут отвечать, но мы им все передадим</span>
                    </div>

                    <form action="/index" class="main-form__form">
                        <label for="name-main">
                            <span class="input-title input-title__black">Ваше имя</span>
                            <input type="text" placeholder="Ваше имя" name="name" id="name-main">
                        </label>
                        <label for="email-main">
                            <span class="input-title input-title__black">Email</span>
                            <input type="email" placeholder="Email" name="email" id="email-main">
                        </label>
                        <label for="message-main">
                            <span class="input-title input-title__black">Сообщение</span>
                            <textarea placeholder="Сообщение" name="message" rows="7" id="message-main"></textarea>
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

<?php require_once '_footer.php' ?>
<?php require_once '_end.php' ?>