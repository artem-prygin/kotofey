<?php require_once '_header.php' ?>

<!--Делимся знаниями, заголовок-->
<div class="container">
    <h2 class="title knowledge-title">Делимся знаниями</h2>
</div>

<!--Статьи-->
<section class="section-articles">
    <div class="container">
        <div class="knowledge-menu">
            <div class="knowledge-option knowledge-option__active" data-option="all">Все статьи</div>
            <div class="knowledge-option" data-option="care">Уход</div>
            <div class="knowledge-option" data-option="health">Здоровье</div>
            <div class="knowledge-option" data-option="teach">Воспитание</div>
        </div>

        <div class="knowledge-blocks">
            <div class="knowledge-block" data-option="teach">
                <div class="knowledge-img">
                    <img src="img/knowledge/found.jpg" alt="found">
                </div>
                <h4 class="smallTitle knowledge-smallTitle">Что делать, если вы нашли на улице кота</h4>
            </div>
            <div class="knowledge-block" data-option="care">
                <div class="knowledge-img">
                    <img src="img/knowledge/care.jpg" alt="care">
                </div>
                <h4 class="smallTitle knowledge-smallTitle">Как ухаживать за шерстью вашего любимца</h4>
            </div>
            <div class="knowledge-block" data-option="teach">
                <div class="knowledge-img">
                    <img src="img/knowledge/take.jpg" alt="take">
                </div>
                <h4 class="smallTitle knowledge-smallTitle">Как взять котика из приюта и не облажаться</h4>
            </div>
            <div class="knowledge-block" data-option="health">
                <div class="knowledge-img">
                    <img src="img/knowledge/feed.jpg" alt="feed">
                </div>
                <h4 class="smallTitle knowledge-smallTitle">Как правильно кормить котиков, чтобы они были
                    довольными</h4>
            </div>
            <div class="knowledge-block" data-option="health">
                <div class="knowledge-img">
                    <img src="img/knowledge/ster.jpg" alt="ster">
                </div>
                <h4 class="smallTitle knowledge-smallTitle">Как понять, что котика пора стерилизовать</h4>
            </div>
        </div>
    </div>
</section>

<?php require_once '_growcat.php' ?>
<?php require_once '_footer.php' ?>
<?php require_once '_end.php' ?>
