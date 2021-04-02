<?php require_once '_header.php' ?>

<!--Благотворительная лотерея-->
<section class="section-lotteryTop">
    <div class="container">
        <div class="lottery-top">
            <div class="lottery-title__wrapper">
                <h2 class="title lottery-title"></h2>
                <div class="descr lottery-descr">Здесь главное — не сорвать куш, а сделать вклад в доброе дело.
                    Собранные
                    средства идут на стерилизацию — самый гуманный способ сократить число бездомных животных
                </div>
            </div>

            <div class="lottery-img">
                <img src="img/lottery/lottery-mainCat.png" alt="cat">
            </div>
        </div>
    </div>
</section>

<!--Котлото с виджетом ВК-->
<section class="section-loto">
    <div class="lottery-loto">
        <div class="container">
            <div class="title lottery-title">Котлото</div>

            <div class="main-news">
                <div class="main-news__buttons">
                    <div class="main-news__button"></div>
                    <div class="main-news__button"></div>
                    <div class="main-news__button"></div>
                </div>

                <div class="main-news__block">
                    <div id="vk_post_-118880326_19444"></div>
                    <script type="text/javascript">
                        (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "https://vk.com/js/api/openapi.js?167";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'vk_openapi_js'));
                        (function () {
                            if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post('vk_post_-118880326_19444', -118880326, 19444, '09W_rIKrOyz-LGQ-KSatHySy1bQP')) setTimeout(arguments.callee, 50);
                        }());
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Предложите свой лот-->
<section class="section-lotteryForm">
    <div class="container">
        <div class="helpForm lottery-form lottery-form__content">
            <div class="helpForm-content">
                <h2 class="helpForm-title title lottery-title">Предложите <span>свой лот</span></h2>
                <div class="helpForm-descr lottery-descr">Если вы хотите подарить что-то для розыгрыша, напишите нам
                </div>
                <form action="" class="helpForm-form lottery-form__body">
                    <label for="name">
                        <span class="input-title">Как вас зовут</span>
                        <input id="name" type="text" name="name" placeholder="Как вас зовут">
                    </label>
                    <label for="email">
                        <span class="input-title">Ваш email</span>
                        <input id="email" type="email" name="email" placeholder="Ваш email">
                    </label>
                    <label for="rub">
                        <span class="input-title">Я хочу предложить...</span>
                        <input id="rub" type="text" name="rub" placeholder="Я хочу предложить...">
                    </label>
                    <label for="rub">
                        <?php require_once 'img/lottery/file.svg'; ?>
                    </label>
                    <button type="submit" class="btn helpForm-btn">Предложить</button>
                </form>
            </div>

            <div class="helpForm-img lottery-form__img">
                <img src="img/lottery/lottery-cat.png" alt="cat">
            </div>
        </div>
    </div>
</section>

<!--Успешная отправка лота-->
<section class="section-lotterySuccess">
    <div class="container">
        <div class="helpForm lottery-form__success">
            <div class="helpForm-content">
                <h2 class="helpForm-title title lottery-title">Поздравляем!</h2>
                <div class="helpForm-descr lottery-descr">Вы только что порадовали одного котика</div>
            </div>

            <div class="helpForm-img lottery-form__img">
                <img src="img/lottery/lottery-cat.png" alt="cat">
            </div>
        </div>
    </div>
</section>

<?php require_once '_footer.php' ?>
<?php require_once '_end.php' ?>
