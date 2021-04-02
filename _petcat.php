<section class="section-petGame">
    <div class="container">
        <div class="growcat">
            <div class="growcat-img pet-img">
                <img src="img/pet.png" alt="pet cat">
            </div>

            <div class="growcat-text">
                <h2 class="title growcat-title">Как правильно <span>гладить котика</span></h2>
                <div class="descr growcat-descr">Игра основана на исследовании специалистов по поведению животных и
                    благотворительной организации Cats Protection. Проверьте, насколько правильно вы понимаете своих(и не
                    только) котов
                </div>

                <a class="btn pet-btn" href="">Играть</a>
            </div>
        </div>
    </div>
</section>


<div class="pet-overlay"></div>
<div class="pet-modal">
    <div class="cats-option pet-modal__cat">

        <div class="pet-bubble">
            <span>Чтобы погладить Котофея, просто нажмите на него</span>
        </div>

        <div class="cats-img pet-modal__img">
            <img src="img/cats/mr.png" alt="mr">
            <div class="pet-bubble__mini1">
                <?php require_once 'img/petcat/bubble-mini1.svg'; ?>
            </div>

            <div class="pet-bubble__mini2">
                <?php require_once 'img/petcat/bubble-mini2.svg'; ?>
            </div>
        </div>
    </div>

    <div class="pet-modal__btn btn">Начать</div>
</div>


<div class="pet-game__overlay"></div>
<div class="pet-game">
    <div class="pet-game__wrapper">
        <div class="pet-game__close">
            <i class="fa fa-close"></i>
        </div>

        <div class="pet-game__mainBubble">
            <?php require_once 'img/petcat/pet-bubbleBg.svg'; ?>
        </div>

        <div class="pet-game__img">
            <img src="img/petcat/satisfied.png" alt="satisfied" class="pet-reaction satisfied">
            <img src="img/petcat/satisfied-very.png" alt="satisfied-very" class="pet-reaction satisfied-very">
            <img src="img/petcat/satisfied-not.png" alt="satisfied-not" class="pet-reaction satisfied-not">
            <img src="img/petcat/satisfied-not__not.png" alt="satisfied-not__not" class="pet-reaction satisfied-not__not">

            <div class="pet-bubble pet-game__bubble">
                <span class="pet-action__result">Начинай же скорей гладить меня, человек</span>
            </div>

            <div class="pet-game__bubble-mini1">
                <?php require_once 'img/petcat/pet-bubbleSmall3.svg'; ?>
            </div>
            <div class="pet-game__bubble-mini2">
                <?php require_once 'img/petcat/pet-bubbleSmall4.svg'; ?>
            </div>

            <div class="zone zone-legs"></div>
            <div class="zone zone-belly"></div>
            <div class="zone zone-tail"></div>
            <div class="zone zone-pretail"></div>
            <div class="zone zone-back"></div>
            <div class="zone zone-head"></div>
            <div class="zone zone-chin"></div>
            <div class="zone zone-nape"></div>
        </div>
    </div>
</div>



















