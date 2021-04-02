$(document).ready(function () {

    //открытие превью игры
    $('.pet-btn').click(function (e) {
        e.preventDefault();
        $('body').css('overflow', 'hidden');
        $('.pet-overlay, .pet-modal').fadeIn();
    });

    $('.pet-modal__btn').click(function () {
        $('.pet-game__overlay, .pet-game').fadeIn();
        $('.pet-game').css('display', 'flex');

        setTimeout(function () {
            $('.pet-overlay, .pet-modal').fadeOut();
        }, 1000);
    });

    $('.pet-game__close').click(function () {
        $('.pet-game__overlay, .pet-game').fadeOut();
        $('body').css('overflow-y', 'visible');
    });

    $('.zone-nape').click(function () {
        $('.pet-action__result').html('Отличный выбор, а можно еще?');
        $('.pet-reaction ').hide();
        $('.satisfied-very').show();
        $('.pet-game__mainBubble').removeClass('pet-game__mainBubble-blue').removeClass('pet-game__mainBubble-green').addClass('pet-game__mainBubble-pink');
    });

    $('.zone-chin').click(function () {
        $('.pet-action__result').html('Недурно, я одобряю');
        $('.pet-reaction ').hide();
        $('.satisfied').show();
        $('.pet-game__mainBubble').removeClass('pet-game__mainBubble-blue').removeClass('pet-game__mainBubble-green').addClass('pet-game__mainBubble-pink');
    });

    $('.zone-pretail').click(function () {
        $('.pet-action__result').html('Погладь меня еще, человек');
        $('.pet-reaction ').hide();
        $('.satisfied').show();
        $('.pet-game__mainBubble').removeClass('pet-game__mainBubble-blue').removeClass('pet-game__mainBubble-green').addClass('pet-game__mainBubble-pink');
    });

    $('.zone-head').click(function () {
        $('.pet-action__result').html('Mrrr, я позволяю тебе продолжить, человек');
        $('.pet-reaction ').hide();
        $('.satisfied-very').show();
        $('.pet-game__mainBubble').removeClass('pet-game__mainBubble-blue').removeClass('pet-game__mainBubble-green').addClass('pet-game__mainBubble-pink');
    });

    $('.zone-belly').click(function () {
        $('.pet-action__result').html('Мне не нравится щекотка, не трожь пузико');
        $('.pet-reaction ').hide();
        $('.satisfied-not__not').show();
        $('.pet-game__mainBubble').removeClass('pet-game__mainBubble-pink').removeClass('pet-game__mainBubble-green').addClass('pet-game__mainBubble-blue');
    });

    $('.zone-legs').click(function () {
        $('.pet-action__result').html('Shhhh, прекрати или я сделаю кусь');
        $('.pet-reaction ').hide();
        $('.satisfied-not__not').show();
        $('.pet-game__mainBubble').removeClass('pet-game__mainBubble-pink').removeClass('pet-game__mainBubble-green').addClass('pet-game__mainBubble-blue');
    });

    $('.zone-tail').click(function () {
        $('.pet-action__result').html('Я поднял хвост, потому что приветствую тебя. Не трогай его, мне не нравится');
        $('.pet-reaction ').hide();
        $('.satisfied-not__not').show();
        $('.pet-game__mainBubble').removeClass('pet-game__mainBubble-pink').removeClass('pet-game__mainBubble-green').addClass('pet-game__mainBubble-blue');
    });

    $('.zone-back').click(function () {
        $('.pet-action__result').html('Ну такое. Попробуй еще');
        $('.pet-reaction ').hide();
        $('.satisfied-not').show();
        $('.pet-game__mainBubble').removeClass('pet-game__mainBubble-blue').removeClass('pet-game__mainBubble-pink').addClass('pet-game__mainBubble-green');
    });
});
















